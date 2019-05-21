<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\News;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

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

            /*
            $now = date('d/m/y H:i:s');
            $msg = "
                <h1>Contato La Pinceli - Quero ser um fornecedor</h1>
                <br>
                <p>Nome: {$data['name']}</p>
                <p>Email: {$data['email']}</p>
                <p>Data: {$now}</p>
            ";
            $email = new Email('default');
            $email->setFrom(['contato@lapinceli.com.br' => 'Contato la Pinceli'])
                ->setTo('rkfumes@gmail.com.com')
                ->setSubject('Quero ser um fornecedor')
                ->send($msg);
            */

        }
    }
}
