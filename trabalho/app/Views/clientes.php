<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Clientes</title>
</head>

<body>
    <div class="container mt-5">
        <a class="btn btn-outline-success" href="/Cliente/cadastrar">Cadastrar</a>
        <h2 class="text-center mb-4">Tabela de clientes</h2>    
            <?php if(!empty($dados) && is_array($dados)) : ?>
                <table class="table mb-5">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Idade</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach ($dados as $dado) : ?>
                        <tr>
                            <td><?php echo $dado['idCliente'] ?></td>
                            <td><?php echo $dado['nome'] ?></td>
                            <td><?php echo $dado['cpf'] ?></td>
                            <td><?php echo $dado['idade'] ?></td>
                            <td>
                                <a href= "<?='/Cliente/editar/'.$dado['idCliente']?>">Editar</a>
                                 -
                                <a href= "<?='/Pedidos/novoPedido/'.$dado['idCliente']?>">Criar Pedido</a>
                                 -
                                <a href= "<?='/Cliente/delete/'.$dado['idCliente']?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <p>Nenhum dado cadastrado </p>
            <?php endif; ?>
        </div>
</body>
</html>