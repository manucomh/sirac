<?php 
class Error_controller extends Controller {
  function __construct()
  {
    
  }
  
  function index() {
    $data =
    [
      'title' => 'Página no encontrada',
      'bg'    => 'dark'
    ];
    echo "error render";
    View::render('404', $data);
  }  
}