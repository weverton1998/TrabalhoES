<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cardapio</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Bem-vindo ao Santa Bergamota</h2>    
        <a class="btn btn-outline-success" href="/Itens/cadastrar">Cadastrar</a>
        <?php if(!empty($itens) && is_array($itens)) : ?>
            <table class="table mb-5">
                <tr>
                    <th>Nome</th>
                    <th>descricao</th>
                    <th>preco</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($itens as $iten) : ?>
                    <tr>
                        <td><?php echo $iten['nome'] ?></td>
                        <td><?php echo $iten['descricao'] ?></td>
                        <td><?php echo $iten['preco'] ?>,00</td>
                        <td>
                            <a href= "<?='/Itens/editar/'.$iten['idItem']?>">Editar</a>
                            -
                            <a href= "<?='/Itens/delete/'.$iten['idItem']?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>Nenhum iten cadastrado </p>
        <?php endif; ?>
    </div>
</body>
</html>