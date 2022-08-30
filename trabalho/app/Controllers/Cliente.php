<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Cliente extends BaseController
{
    private $clienteModel;
	
    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

	public function traserCliente()
    {
        return $this->clienteModel->findAll();
    }

	public function traserUmCliente($idcliente)
    {
        return $this->clienteModel->find($idcliente);
    }

	public function tabelaCliente()
	{
		echo view('nav');
        echo view('clientes',[
            "dados" => $this->clienteModel->findAll()
        ]);
	}

    public function cadastrar()
    {
        echo view('nav');
        echo view('formUser',[
            'acao' => '/Cliente/resultadoNovoCadastro',
			'titulo' => 'Insira seus dados'
        ]);
    }
    
    public function resultadoNovoCadastro()
	{
		//tras os dados vindos pelos formulario
		$id = $this->request->getVar('idCliente');
		$nome = $this->request->getVar('nome');
		$cpf = $this->request->getVar('cpf');
		$idade = $this->request->getVar('idade');

		if($this->clienteModel ->save([
			'nome' =>$nome,
			'cpf' => $cpf,
			'idade' => $idade
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
				'menssagens' => 'Erro ao cadastrar novo usuario! Tente novamente!'
			]);
		}
	}

	public function editar($id)
	{
		$user = $this->clienteModel->find($id);
		
		echo view ('nav');
		echo view('formUser', [
			'user' => $user,
			'acao' => '/Cliente/edcaoCadastro',
			'titulo' => 'Altere seus dados'
			]);
	}

	public function edcaoCadastro()
	{
		//tras os dados vindos pelos formulario
		$id = $this->request->getVar('id');
		$nome = $this->request->getVar('nome');
		$cpf = $this->request->getVar('cpf');
		$idade = $this->request->getVar('idade');

		if($this->clienteModel->update($id,[
			'nome' =>$nome,
			'cpf' => $cpf,
			'idade' => $idade
			]))
		{
			echo view ('nav');
		    echo view('menssagens', [
				'titulo' => 'Menssagem!',
			    'menssagens' => 'Cadastro atualizado com sucesso!'
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
		if ($this->clienteModel->delete($id)) {
			echo view ('nav');
			echo view('menssagens', [
				'menssagens' => 'Usuário Excluído com Sucesso'
			]);
		} else {
			echo view ('nav');
			echo view('menssagens', [
				'menssagens' => 'Erro ao excluir usuario!'
			]);
		}
	}
}
