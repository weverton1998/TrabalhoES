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
        <h2 class="text-center mb-4">Tabela de clientes</h2>    
            <?php if(!empty($pedidos) && is_array($pedidos)) : ?>
                <table class="table mb-5">
                    <tr>
                        <th>ID Pedido</th>
                        <th>Cliente</th>
                        <th>Valor total</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach ($pedidos as $pedido) : ?>
                        <?php foreach ($clientes as $cliente) : ?>
                            <?php if($pedido['idCliente'] == $cliente['idCliente']) : ?>
                                <tr>
                                    <td><?php echo $pedido['idPedido'] ?></td>
                                    <td><?php echo $cliente['nome'] ?></td>
                                    <td><?php echo $pedido['valorTotal'] ?>,00</td>
                                    <td>
                                        <?php if($pedido['finalizado'] == 'N') : ?>
                                            <a href= "<?='/Pedidos/addItem/'.$pedido['idPedido']?>">Adicionar Item</a>
                                        <?php else: ?>
                                            <o>Pedido finalizado</o>
                                        <?php endif; ?>
                                        -
                                        <a href= "<?='/Pedidos/detalhes/'.$pedido['idPedido']?>">Detalhes</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <p>Nenhum pedido cadastrado </p>
            <?php endif; ?>
        </div>
</body>
</html>