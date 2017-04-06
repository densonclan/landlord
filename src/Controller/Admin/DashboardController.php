<?php
namespace App\Controller\Admin;

use App\Controller\AppController;



/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\DashboardTable $Dashboard
 */
class DashboardController extends AppController
{

public $helpers = array('GoogleMap');   //Adding the helper

    public function index(){
        $this->set('title_for_layout', 'Dashboard');
        $this->viewBuilder()->layout('admin');
    }
}
