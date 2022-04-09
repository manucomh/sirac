<?php


class View {
    
    public static function render($view, $data = []){
        $d = to_object($data);      //data en array assoc o $d en objetos
        if(!is_file(VIEWS.CONTROLLERS.DS.$view.'View.php')) {
            
        }
    }
}