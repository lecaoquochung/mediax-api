<?php
/*------------------------------------------------------------------------------------------------------------
 * Ranklogs API
 *
 * @input		
 * @output
 * 
 * @author		Le Hung <lecaoquochung@gmail.com>
 * @license		http://www.opensource.org/licenses/mit-license.php The MIT License
 * @created		201512
 -------------------------------------------------------------------------------------------------------------*/

namespace App\Controller\Api;

use App\Controller\Api\AppController;

class RanklogsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'keyword'
        ]
    ];
}