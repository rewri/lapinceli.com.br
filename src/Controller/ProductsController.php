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
    }

    public function detail($slug = null, $id = null)
    {
        $this->set('title', $slug);
    }
}
