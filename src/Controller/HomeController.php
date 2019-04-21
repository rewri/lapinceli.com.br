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
        $this->loadModel('Products');
        $this->viewBuilder()->setLayout('home');
        $products = $this->Products->getAll()->toArray();
        $this->set(compact('products'));
        $this->set('title', 'Home');
    }
}
