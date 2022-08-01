<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ItensModel;

class Cardapio extends BaseController
{
    private $itensModel;
    
    public function __construct()
    {
        $this->itensModel = new ItensModel();
    }
    
    public function index()
    {
        return view('Cardapio',[
            "itens" => $this->itensModel->findAll()
        ]);
    }
}