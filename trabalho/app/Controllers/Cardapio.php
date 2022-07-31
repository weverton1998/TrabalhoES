<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cardapio extends BaseController
{
    private $itensModel;
    
    public function __construct()
    {
        $this->itensModel = new ItensModel();
    }
    
    public function index()
    {
        return view('cardapio',[
            "itens" => $this->itensModel->findAll()
        ]);
    }
}
