<?php 
class Death_controller extends Controller{
    
    function __construct()
    {
        
    }

    function index(){
        view::render('index',['module' => 'defuncion']);
    }
}


?>