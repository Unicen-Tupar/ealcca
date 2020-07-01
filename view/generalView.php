<?php
require_once('libs/Smarty.class.php');

class generalView{

    private $Smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function home($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('templates/index.tpl');
    }

    function staff($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('templates/staff.tpl');
    }

    function extensiones($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('templates/extensiones.tpl');    
    }

    function makeup($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('templates/makeup.tpl');
    }

    function cursos($categories,$courses){
        $this->smarty->assign('categories',$categories);
        $this->smarty->assign('courses',$courses);
        $this->smarty->display('templates/cursos.tpl');
    }

    function contacto($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('templates/contacto.tpl');      
    }



}


?>