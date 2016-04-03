<?php  

require_once 'Cliente.php';

$clientes = array
(
  0=>  new Cliente("Iuri Cristofaro", "000.000.000.000", "Rua Austrália", "3424-0000"),
  1=>  new Cliente("Maria Cristo", "111.111.111.111", "Rua Brazil", "3424-1111"),
  2=>  new Cliente("Dayana Oliveira", "222.222.222.222", "Rua Colonbia", "3424-2222"),
  3=>  new Cliente("José Alves", "333.333.333.333", "Rua Dubai", "3424-3333"),
  4=>  new Cliente("Cláudia Jesus", "444.444.444.444", "Rua Equardor", "3424-4444"),
  5=>  new Cliente("Pedro Fonseca", "555.555.555.555", "Rua Franças", "3424-5555"),
  6=>  new Cliente("Flávia Lucas", "666.666.666.666", "Rua Goianas", "3424-6666"),
  7=>  new Cliente("Santiago", "777.777.777.777", "Rua Holandas", "3424-7777"),
  8=>  new Cliente("Bárbara Costa", "888.888.888.888", "Rua Internacional", "3424-8888"),
  9=>  new Cliente("Paulo Emílio", "999.999.999.999", "Rua Jaboticabal", "3424-9999")
);

if(isset($_GET['valor']) && $_GET['valor'] == 'asc'){
    asort($clientes);
}

if(isset($_GET['valor']) && $_GET['valor'] == 'desc'){
    rsort($clientes);
}

if(isset($_GET['id']) && $_GET['id'] != ''){
    $selecionado = $clientes[$_GET['id']];
}

?>