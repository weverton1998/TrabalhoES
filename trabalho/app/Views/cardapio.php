<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cardapio</title>

    <style>
        .navbar
        {
            background-color = #ffa500;
        }
    </style>

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
    <nav class="navbar navbar-expand-lg" style="background-color: #e69e19; fixed-top">
        <div class="container-fluid">  
            <a class="navbar-brand" href="#"> Emakers Jr</a>

            <botton class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="varbarResponsive" aria-epanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </botton>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item active">
                <a class="nav-link" href="#">Inicio</a>
                </li>

                <li class="nav-item active">
                <a class="nav-link" href="#">Sobre</a>
                </li>

                <li class="nav-item active">
                <a class="nav-link" href="#">Fotos</a>
                </li>

                <li class="nav-item active">
                <a class="nav-link" href="#">Contatos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Bem-vindo ao Santa Bergamota</h2>    
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
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <p>Nenhum iten cadastrado </p>
            <?php endif; ?>
        </div>
</body>
</html>