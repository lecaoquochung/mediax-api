<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ranklogs Controller
 *
 * @property \App\Model\Table\RanklogsTable $Ranklogs
 */
class RanklogsController extends AppController
{

/*------------------------------------------------------------------------------------------------------------
 * RanklogsController API
 *
 * @input		
 * @output
 * 
 * @author		Le Hung <lecaoquochung@gmail.com>
 * @license		http://www.opensource.org/licenses/mit-license.php The MIT License
 * @created		201512
 -------------------------------------------------------------------------------------------------------------*/
    // public $paginate = [
        // 'page' => 1,
        // 'limit' => 10,
        // 'maxLimit' => 100,
        // 'fields' => [
            // 'id', 'keyword', 'url'
        // ],
        // 'sortWhitelist' => [
            // 'id', 'keyword', 'url'
        // ]
    // ];
 
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Keywords', 'Engines']
        ];
        $this->set('ranklogs', $this->paginate($this->Ranklogs));
        $this->set('_serialize', ['ranklogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Ranklog id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ranklog = $this->Ranklogs->get($id, [
            'contain' => ['Keywords', 'Engines']
        ]);
        $this->set('ranklog', $ranklog);
        $this->set('_serialize', ['ranklog']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ranklog = $this->Ranklogs->newEntity();
        if ($this->request->is('post')) {
            $ranklog = $this->Ranklogs->patchEntity($ranklog, $this->request->data);
            if ($this->Ranklogs->save($ranklog)) {
                $this->Flash->success(__('The ranklog has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ranklog could not be saved. Please, try again.'));
            }
        }
        $keywords = $this->Ranklogs->Keywords->find('list', ['limit' => 200]);
        $engines = $this->Ranklogs->Engines->find('list', ['limit' => 200]);
        $this->set(compact('ranklog', 'keywords', 'engines'));
        $this->set('_serialize', ['ranklog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ranklog id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ranklog = $this->Ranklogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ranklog = $this->Ranklogs->patchEntity($ranklog, $this->request->data);
            if ($this->Ranklogs->save($ranklog)) {
                $this->Flash->success(__('The ranklog has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ranklog could not be saved. Please, try again.'));
            }
        }
        $keywords = $this->Ranklogs->Keywords->find('list', ['limit' => 200]);
        $engines = $this->Ranklogs->Engines->find('list', ['limit' => 200]);
        $this->set(compact('ranklog', 'keywords', 'engines'));
        $this->set('_serialize', ['ranklog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ranklog id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ranklog = $this->Ranklogs->get($id);
        if ($this->Ranklogs->delete($ranklog)) {
            $this->Flash->success(__('The ranklog has been deleted.'));
        } else {
            $this->Flash->error(__('The ranklog could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
