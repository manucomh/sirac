<?php

//////////////////////////////// 2021
//////////////////////////////// Joystick
//////////////////////////////// Bee-Framework

// Definir el uso horario o timezone del sistema
date_default_timezone_set('America/Lima');

define('PREPROS'     , false); // Activar en caso de trabajar el desarrollo en prepros como servidor local

// Lenguaje
// define('SITE_LANG'   , $this->lng);

// Versión de la aplicación
define('SYSTEM_NAME'   , 'REGISTRO CIVIL');    
define('SYSTEM_VERSION', '1.0.0');          

// Ruta base de nuestro proyecto
// Esta constante ahora es configurada desde el archivo settings.php
define('BASEPATH','/registrocivil/');

// Puerto y la URL del sitio
define('PORT'       , isset($_SERVER['SERVER_PORT'])?'80':''); // Puerto por defecto de Prepros <2020
define('PROTOCOL'   , isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http"); // Detectar si está en HTTPS o HTTP
define('HOST'       , $_SERVER['HTTP_HOST'] === 'localhost' ? (PREPROS ? 'localhost:'.PORT : 'localhost') : $_SERVER['HTTP_HOST']); // Dominio o host localhost.com tudominio.com
define('REQUEST_URI', $_SERVER["REQUEST_URI"]); // Parametros y ruta requerida
define('URL'        , PROTOCOL.'://'.HOST.BASEPATH); // URL del sitio
define('CUR_PAGE'   , PROTOCOL.'://'.HOST.REQUEST_URI); // URL actual incluyendo parametros get

// Las rutas de directorios y archivos
define('DS'         , DIRECTORY_SEPARATOR);
define('ROOT'       , getcwd().DS);

define('CLASSES'    , ROOT.'classes'.DS);
// define('CONFIG'     , ROOT.'config'.DS);
define('CONTROLLERS', ROOT.'controllers'.DS);
define('FUNCTIONS'  , ROOT.'functions'.DS);
define('MODELS'     , ROOT.'models'.DS);
// define('LOGS'       , ROOT.'logs'.DS);


// Rutas de recursos y assets absolutos
define('IMAGES_PATH', ROOT.'assets'.DS.'images'.DS);

//Rutas de archivos o assets con base URL
define('ASSETS'     , URL.'assets/');
define('CSS'        , ASSETS.'css/');
define('FAVICON'    , ASSETS.'favicon/');
define('FONTS'      , ASSETS.'fonts/');
define('IMAGES'     , ASSETS.'images/');
define('JS'         , ASSETS.'js/');
define('PLUGINS'    , ASSETS.'plugins/');
define('UPLOADS'    , ROOT.'assets'.DS.'uploads'.DS);
define('UPLOADED'   , ASSETS.'uploads/');

// Credenciales de la base de datos
// Set para conexión local o de desarrollo
define('LDB_ENGINE' , 'mysql');
define('LDB_HOST'   , 'localhost');
define('LDB_NAME'   , '__LOCAL_DB__');
define('LDB_USER'   , 'root');
define('LDB_PASS'   , '');
define('LDB_CHARSET', 'utf8');

// El controlador por defecto / el método por defecto / y el controlador de errores por defecto
define('DEFAULT_CONTROLLER'      , 'home');
define('DEFAULT_ERROR_CONTROLLER', 'error');
define('DEFAULT_METHOD'          , 'index');



echo URL;
echo "<br>";
echo REQUEST_URI;
ECHO "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo REQUEST_URI;
echo "<br>";
echo CUR_PAGE;
echo "<br>";
echo IMAGES_PATH;