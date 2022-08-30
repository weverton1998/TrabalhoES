<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PedidoModel;
use App\Models\ListaItensModel;

class Pedidos extends BaseController
{
    private $pedidoModel;
    private $listaItensModel;
    private $cliente;
    private $itens;

    public function __construct()
    {
        $this->pedidoModel = new PedidoModel();
        $this->listaItensModel = new ListaItensModel();
        $this->cliente = new Cliente();
        $this->itens = new Itens();
    }

    public function tabelaPedidos()
	{
        $clientes = $this->cliente->traserCliente();
		echo view('nav');
        echo view('pedido',[
            "pedidos" => $this->pedidoModel->findAll(),
            "clientes" => $clientes
        ]);
	}

    public function novoPedido($user)
    {
        if($this->pedidoModel ->save([
            'idCliente' => $user,
            'valor_total' => '0',
            'finalizado' => 'N'
        ]))
        {
            echo view ('nav');
		    echo view('menssagens', [
				'titulo' => 'Menssagem!',
			    'menssagens' => 'criado com sucesso!'
			]);
        }
        else
		{
			echo view ('nav');
			echo view('menssagens', [
				'titulo' => 'Menssagem!',
				'menssagens' => 'Erro ao cadastrar novo pedido! Tente novamente!'
			]);
		}
    }

    public function addItem($idPedido)
    {
        echo view('nav');
        echo view('addItem',[
            "acao" => '/Pedidos/salvaItenPedido',
            "titulo" => "Escolha o produto",
            "itens" => $this->itens->traserItens(),
            "pedido" => $idPedido
        ]);
    }

    public function salvaItenPedido()
    {
        $pedido = $this->request->getVar('pedido');
		$produto = $this->request->getVar('produto');
        
        if($this->listaItensModel->save([
            'idPedido' => $pedido, 
            'idItem' => $produto
        ]))
        {
            $this::calculaValor($pedido, $produto);
            echo view ('nav');
			echo view('menssagens', [
				'titulo' => 'Menssagem!',
				'menssagens' => 'adicionado com sucesso!'
			]);
        }
        else
		{
			echo view ('nav');
			echo view('menssagens', [
				'titulo' => 'Menssagem!',
				'menssagens' => 'Erro ao cadastrar novo iteml! Tente novamente!'
			]);
		}
    }

    public function calculaValor($pedido, $produto){
        $produto = substr($produto, 0, 1);
        
        $produto = $this->itens->traserUmIten($produto);
        $pedido = $this->pedidoModel->find($pedido);
        $total = intval($pedido['valorTotal']);
        $total += intval($produto['preco']); 
        
        $this->pedidoModel->update($pedido['idPedido'], [
            'idCliente' => $pedido['idCliente'],
            'valorTotal'=> $total,
            'finalizado' => $pedido['finalizado']
        ]); 
    }

    public function detalhes($idpedido)
    {
        $pedido = $this->pedidoModel->find($idpedido);
        $cardapio = $this->itens->traserItens();
        $Listaprodutos = $this->listaItensModel->findAll();
        $dadosItens = [];
        $produtosPedidos = [];

        foreach ($Listaprodutos as $produto){
           if($produto['idPedido'] == $idpedido)
            {
                array_push($produtosPedidos, $produto);
            } 
        }

        foreach($produtosPedidos as $produto)
        {
            foreach ($cardapio as $itens)
            {
                if($produto['idItem'] == $itens['idItem'])
                {
                    array_push($dadosItens, $itens);
                } 
            }
        }
        
        echo view ('nav');
        echo view ('detalhes', [
            'cliente' => $this->cliente->traserUmCliente($pedido['idCliente']),
            'itens' => $dadosItens,
            'pedido' => $pedido
        ]);
    }

    public function finalizaPedido($idPedido)
    {
        $pedido = $this->pedidoModel->find($idPedido);
        $this->pedidoModel->update($idPedido,([
            'idCliente' => $pedido['idCliente'],
            'valor' => $pedido['valorTotal'],
            'finalizado' => 'S'
        ]));

        echo view ('nav');
		echo view('menssagens', [
			'titulo' => 'Menssagem!',
			'menssagens' => 'pedido finalizado!'
		]);
    }
}