<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cardapio</title>

    <script>
        function confirma() {
            if (!confirm('Desejar excluir o registro?')) {
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="container mt-5">
        <?php echo anchor(base_url('TabelaDeitens/novoCadastro'), 'Cadastrar novos itens', ['class' => 'btn btn-success mb-4 mt-2']) ?>
        <h2 class="text-center mb-4">Tabela de itens Cadastrados</h2>    
            <?php if(!empty($itens) && is_array($itens)) : ?>
                <table class="table mb-5">
                    <tr>
                        <th>Nome</th>
                        <th>descricao</th>
                        <th>preco</th>
                    </tr>
                    <?php foreach ($itens as $iten) : ?>
                        <tr>
                            <td><?php echo $iten['nome'] ?></td>
                            <td><?php echo $iten['descricao'] ?></td>
                            <td><?php echo $iten['preco'] ?></td>
                            <td>
                                <?php echo anchor('TabelaDeitens/editar/' . $iten['id'], 'Editar') ?>
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