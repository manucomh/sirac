<?php 
class Setting_controller extends Controller{

    function __construct (){
    }

    function index(){
        View::render('index',['madule' => 'configuracion']);
    }
}


?>