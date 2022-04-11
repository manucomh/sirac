<?php 

class Error_ontroller extends Controller {
  function __construct()
  {
  }
  
  function index() {
    $data =
    [
      'title' => 'Página no encontrada',
      'bg'    => 'dark'
    ];
    View::render('404', $data);
  }
}