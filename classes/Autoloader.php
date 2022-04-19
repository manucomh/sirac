<?php

class Autoloader
{
  /**
   * Método encargado de ejecutar el autocargador de forma estática
   *
   * @return void
   */
  public static function init()
  {
    spl_autoload_register([__CLASS__, 'autoload']);
  }

  private static function autoload($class_name)
  {

    if(is_file(CLASSES.$class_name.'.php')) {
      require_once CLASSES.$class_name.'.php';
      // echo "class: ".$class_name."<br>";
    } elseif(is_file(CONTROLLERS.$class_name.'.php')) {
      require_once CONTROLLERS.$class_name.'.php';
      // echo "controllers: ".$class_name."<br>";
    } elseif(is_file(MODELS.$class_name.'.php')) {
      require_once MODELS.$class_name.'.php';
      // echo "model: ".$class_name."<br>";
    }

    return;
  }
}
