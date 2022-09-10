<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Entrar</title>
</head>

<body>
    <div class="container mt-5 text-center" style="width: 40%;">
        <h2><?=$titulo?></h2>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <input type="submit" value="Salvar" class="btn btn-success mt-3">
        <input type="hidden" name="id">
        <a class="nav-link mt-2" style="color: #000;" href="cadastrar">Cadrastrar</a>  
    </div>
</body>