<?php
require_once "./Model/ModelItems.php";
require_once "./View/ViewItems.php";
class ControllerItems{
    private $model;
    private $view;
    function __construct(){
        $this->model = new ModelItems();
        $this->view = new ViewItems();
    }

    function getItems(){
      $item = $this->model->getItems();
        $this->view->getItems($item);

    }
    function getHome(){
        $this->view->getHome();
    }
}


?>