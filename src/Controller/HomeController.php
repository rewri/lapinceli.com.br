<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\News;
use Cake\ORM\TableRegistry;

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

    public function saveNews()
    {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['enabled'] = 1;
            $data['created'] = date('Y-m-d H:i:s');
            $articles = TableRegistry::getTableLocator()->get('News');
            $article = $articles->newEntity($data);
            $articles->save($article);
        }
    }
}
