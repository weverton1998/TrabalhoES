<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class Cardapio extends BaseController
{
    private $itens;
    
    public function __construct()
    {
        $this->itens = new Itens();
    }
    
    public function index()
    {
        echo view('nav');
        echo view('cardapio',[
            "itens" => $this->itens->traserItens()
        ]);
    }

}