<?php 

require_once 'listagem.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clientes</title>
            <!-- Bootstrap -->
            <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Listagem de Clientes</h1>
            </div>
        </div>

        <div class="alert alert-defaul" role="alert">
            <a href="?valor=asc" class="btn btn-primary">
                <span aria-hidden="true"></span>&nbsp;Ordem Crescente
            </a>
            <a href="?valor=desc" class="btn btn-primary">
                <span aria-hidden="true"></span>&nbsp;Ordem Decrescente
            </a>
        </div>
        <div class="row">
            
            <table id="tablaDatos" class="table table-bordered">
                <thead>
                    <tr>
                        <td class="list-group-item-danger">ID</td>
                        <td class="list-group-item-danger">Nome</td>
                        <td class="list-group-item-danger">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes as $key => $cliente): ?>
                    <tr>
                        <td class="list-group-item-success"><?php echo $key + 1; ?></td>
                        <td class="list-group-item-success"><?php echo $cliente->getNome(); ?></td>
                        <td class="list-group-item-success"><a href="dados.php?id=<?php echo $key; ?>">Detalhes</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>