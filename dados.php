<?php

require_once 'listagem.php';

$key = filter_input(INPUT_GET, 'id');
if(!array_key_exists($key,$clientes)) {
    header('location: /');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cleintes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Detalhes do Cliente</h1>
        </div>
    </div>
    <div class="row">
        <p>Nome:<strong><?php echo $clientes[$key]->getNome(); ?></strong></p>
        <p>CPF: <?php echo $clientes[$key]->getCpf(); ?></p>
        <p><?php echo $clientes[$key]->getEndereco(); ?></p>
        <p>Cep: <?php echo $clientes[$key]->getFone(); ?></p>
        <button class="btn btn-primary" onclick="history.back()">Voltar</button>
    </div>
</div>

</body>
</html>