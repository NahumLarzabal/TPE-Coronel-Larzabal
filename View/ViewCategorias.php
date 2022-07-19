<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ViewCategorias{
   private $smarty;
    function __construct(){
        $this->smarty=new Smarty();
    }

    function getCategorias($item){
        $this->smarty->assign('item', $item);
        $this->smarty->display('templates/main.tpl');
    }
 

    }



?>