<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    public function index()
    {
        $this->set('title', 'Produtos');
        $data = $this->Products->getAll()->toArray();
        $this->set(compact('data'));
    }

    public function detail($slug = null, $id = null)
    {
        $data = $this->Products->findById($id)->contain('ProductImages')->toArray();
        $data = reset($data);
        $this->set('title', 'produto');
        $this->set(compact('data'));
    }
}
