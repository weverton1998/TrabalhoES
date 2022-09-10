<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>

<body>
    <div class="container mt-5">
        <form action="<?= $acao ?>" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
        <h2><?=$titulo?></h2>
            <div class="form-group mt-2"> 
                <label for="nome"> Nome </label>
                <input type="text" required="required" class="form-control" name="nome" value="<?= isset($item['nome']) ? $item['nome'] : set_value('nome') ?>"/>
            </div>  
            <div class="form-group mt-2"> 
                <label for="descricao"> Descricao </label></br>
                <input type="text" required="required" class="form-control" name="descricao" value="<?= isset($item['descricao']) ? $item['descricao'] : set_value('descricao') ?>"/>
            </div>
            <div class="form-group mt-2"> 
                <label for="preco"> Preco </label></br>
                <input type="text" required="required" class="form-control" name="preco" value="<?= isset($item['preco']) ? $item['preco'] : set_value('preco') ?>"/>
            </div>

            <input type="hidden" name="id" value="<?= isset($item['idItem']) ? $item['idItem'] : set_value('idItem') ?>">
            <input type="submit" name="submit" class="btn btn-success mt-2" value="salvar">
        </form>
    </div>
</body>

</html>