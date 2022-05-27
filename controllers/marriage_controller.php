<?php 

class Marriage_controller extends Controller{

    function __construct()
    {
        
    }

    function index (){
        View::render('index',['module' => 'Matrimonio']);
    }



}

?>