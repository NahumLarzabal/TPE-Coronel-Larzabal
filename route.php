<?php
require_once "./Controller/ControllerItems.php";
require_once "./Controller/ControllerCategorias.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

//$itemsController = new ControllerItems();
$categoriaController = new ControllerCategorias();
$categoriaItems= new ControllerItems();

// determina que camino seguir según la acción
 switch ($params[0]) {
    case 'home': 
        $categoriaItems->getHome();
        break;
    case 'categorias': 
      $categoriaController->getCategorias();
      break;
    case 'items': 
        $categoriaItems->getItems();
        break;
 
   default: 
      echo('404 Page not found'); 
      break;
 }


?>