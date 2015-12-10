<?php
/*------------------------------------------------------------------------------------------------------------
 * api
 *
 * @input		
 * @output
 * 
 * @author		Le Hung <lecaoquochung@gmail.com>
 * @license		http://www.opensource.org/licenses/mit-license.php The MIT License
 * @created		201512
 -------------------------------------------------------------------------------------------------------------*/

namespace App\Controller\Api;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    use \Crud\Controller\ControllerTrait;

    public $components = [
        'RequestHandler',
        'Crud.Crud' => [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete'
            ],
            'listeners' => [
                'Crud.Api',
                'Crud.ApiPagination',
                'Crud.ApiQueryLog'
            ]
        ]
    ];
}