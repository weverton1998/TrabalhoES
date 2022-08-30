<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ItensModel;

class Itens extends BaseController
{
    private $itensModel;
    
    public function __construct()
    {
        $this->itensModel = new ItensModel();
    }
    
    public function traserItens()
    {
        return $this->itensModel->findAll();
    }

	public function traserUmIten($idItem)
    {
        return $this->itensModel->find($idItem);
    }

    public function cadastrar()
    {
        echo view('nav');
        echo view('formItens',[
            'acao' => '/Itens/resultadoNovoCadastro',
			'titulo' => 'Insira os dados'
        ]);
    }
    
    public function resultadoNovoCadastro()
	{
		//tras os dados vindos pelos formulario
		$id = $this->request->getVar('id');
		$nome = $this->request->getVar('nome');
		$preco = $this->request->getVar('preco');
		$descricao = $this->request->getVar('descricao');

		if($this->itensModel ->save([
			'nome' =>$nome,
			'preco' => $preco,
			'descricao' => $descricao
			]))
		{
			echo view ('nav');
		    echo view('menssagens', [
				'titulo' => 'Menssagem!',
			    'menssagens' => 'Cadastrado com sucesso!'
			]);
		}
		else
		{
			echo view ('nav');
			echo view('menssagens', [
				'titulo' => 'Menssagem!',
				'menssagens' => 'Erro ao cadastrar novo item! Tente novamente!'
			]);
		}
	}

	public function editar($produto)
	{
		$item = $this->itensModel->find($produto);
		
		echo view ('nav');
		return view('formItens', [
			'item' => $item,
			'acao' => '/Itens/edcaoCadastro',
			'titulo' => 'Altere os dados'
			]);
	}

	public function edcaoCadastro()
	{
		$id = $this->request->getVar('id');
		$nome = $this->request->getVar('nome');
		$preco = $this->request->getVar('preco');
		$descricao = $this->request->getVar('descricao');

		if($this->itensModel ->update($id,[
			'nome' =>$nome,
			'preco' => $preco,
			'descricao' => $descricao
			]))
		{
			echo view ('nav');
		    echo view('menssagens', [
				'titulo' => 'Menssagem!',
			    'menssagens' => 'Cadastrado com sucesso!'
			]);
		}
		else
		{
			echo view ('nav');
			echo view('menssagens', [
				'titulo' => 'Menssagem!',
				'menssagens' => 'Erro ao atualizar os dados! Tente novamente!'
			]);
		}
	}

	public function delete($id)
	{
		if ($this->itensModel->delete($id)) {
			echo view ('nav');
			echo view('menssagens', [
				'menssagens' => 'item Excluído com Sucesso'
			]);
		} else {
			echo view ('nav');
			echo view('menssagens', [
				'menssagens' => 'Erro ao excluir item!'
			]);
		}
	}
}
