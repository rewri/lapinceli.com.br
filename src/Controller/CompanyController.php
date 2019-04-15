<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Company Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanyController extends AppController
{
    public function index()
    {
        $this->set('title', 'A empresa');
    }

    public function services()
    {
        $this->set('title', 'Serviços');
    }
}
