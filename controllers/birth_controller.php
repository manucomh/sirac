<?php

class Birth_controller extends Controller{
    function __construct()
    {
        
    }

    function index(){
        View::render('index',['title' => 'Login']);
    }
}