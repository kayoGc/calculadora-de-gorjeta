<?php 

if (isset($_GET['valor'])) {
    $servico = new Servico($_GET['valor'], $_GET['qualidade']);
    $gorjeta = $servico->getGorjeta();
    $valorTotal = $servico->getValorTotal();
} else {
    $gorjeta = 0;
    $valorTotal = 0;
}
