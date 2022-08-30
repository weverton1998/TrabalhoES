<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <title>$titulo</title>
</head>

<body>
    <div class="container mt-5">
        <form action="<?= $acao ?>" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
            <h2 class="mb-4"> Escolha um item </h2>
            <div class="form-group mt-2"> 
                <label for="pedido"> ID pedido </label>
                <input type="text"  class="form-control-plaintext" name="pedido" value="<?=($pedido) ? $pedido : set_value('pedido') ?>">
            </div>  
            <div class="form-group col-md-4">
                <label for="produto">Escolha o produto</label>
                <select name="produto" class="form-control" id="produto">
                    <table class="table mb-5">
                        <tr>
                            <th>Nome</th>
                            <th>descricao</th>
                            <th>preco</th>
                            <th>Ações</th>
                        </tr>
                    <option selected>Escolher...</option>
                    <?php foreach ($itens as $iten) : ?>
                        <option><tr>
                            <td><?php echo $iten['idItem'] ?>,</td>
                            <td><?php echo $iten['nome'] ?>,</td>
                            <td><?php echo $iten['preco'] ?>,00</td>
                        </option></tr>
                    <?php endforeach; ?>
                    </table>
                </select>
                <script>
                    $(document).ready(function() {
                    $('#produto').select2();
                });
                </script>
            </div>
            
            <input type="submit" name="submit" class="btn btn-success mt-2" value="salvar">
        </form>
    </div>
</body>

</html>