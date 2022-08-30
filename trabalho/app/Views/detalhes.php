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
        <div class="row justify-content-md-center">
            <div class="col ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title mb-4 text-center ">Dados do cliente:</h2>
                        <h2 class="card-title text-center mb-2"><?php echo $cliente['nome'] ?></h2>
                        <p class="card-text text-center mb-4">
                            cpf : <?php echo $cliente['cpf'] ?>
                            idade : <?php echo $cliente['idade'] ?>
                        </p>
                        <?php if($pedido['finalizado'] == 'N') : ?>
                            <a href="<?='/Pedidos/finalizaPedido/'.$pedido['idPedido']?>" class="btn btn-success" style="margin-left: 24%">Finalizar pedido</a>
                        <?php else: ?>
                            <p class="text-center">Pedido finalizado</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <h2>Produtos pedidos: </h2>
                <?php if(!empty($itens) && is_array($itens)) : ?>
                    <table class="table mb-5">
                        <tr>
                            <th>Nome</th>
                            <th>preco</th>
                        </tr>
                        <?php foreach ($itens as $iten) : ?>
                            <tr>
                                <td><?php echo $iten['nome'] ?></td>
                                <td><?php echo $iten['preco'] ?>,00</td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php else: ?>
                    <p>Nenhum iten cadastrado </p>
                <?php endif; ?>
            </div>
            <div class="col" style="margin-top: 7%;">
                <h2>Valor total: R$<?php echo $pedido['valorTotal'] ?>,00</h2>
            </div>
        </div>
    </div>
</body>
</html>