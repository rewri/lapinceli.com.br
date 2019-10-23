<?php
namespace App\Controller;

use App\Controller\AppController;

class TipsController extends AppController
{

    public function index()
    {
        $this->set('title', 'Dicas e Tutoriais');
    }

}
