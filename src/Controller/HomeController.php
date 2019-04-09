<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('home');
        $this->set('title', 'Home');
    }
}
