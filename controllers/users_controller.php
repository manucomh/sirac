<?php 
class Users_controller extends Controller{
    
    function __construct()
    {
        
    }

    function index(){
        view::render('index',['module' => 'Usuarios']);
    }
}


?>