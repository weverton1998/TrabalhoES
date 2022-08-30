<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>$titulo</title>
</head>

<body>
    <div class="container mt-5">
        <form action="<?= $acao ?>" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
            <div class="form-group mt-2"> 
                <label for="nome"> Nome </label>
                <input type="text" required="required" class="form-control" name="nome" value="<?= isset($user['nome']) ? $user['nome'] : set_value('nome') ?>"/>
            </div>  
            <div class="form-group mt-2"> 
                <label for="cpf"> cpf </label></br>
                <input type="text" required="required" class="form-control" name="cpf" value="<?= isset($user['cpf']) ? $user['cpf'] : set_value('cpf') ?>"/>
            </div>
            <div class="form-group mt-2"> 
                <label for="idade"> Idade </label></br>
                <input type="text" required="required" class="form-control" name="idade" value="<?= isset($user['idade']) ? $user['idade'] : set_value('idade') ?>"/>
            </div>
            
            <input type="hidden" name="id" value="<?= isset($user['idCliente']) ? $user['idCliente'] : set_value('idCliente') ?>">
            <input type="submit" name="submit" class="btn btn-success mt-2" value="salvar">
        </form>
    </div>
</body>

</html>