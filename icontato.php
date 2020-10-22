<?php


$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'contato':
            include_once "paginas/contatos.php";
            break;
    
        }

} else {
    include_once "paginas/produto1.php";
}






