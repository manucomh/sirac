
<?php

class Route{
    
    public $route=array(
        'images'=>"../images/",
        'base_uri'=>"",
        'js'=>"assets/js/",
        'css'=>"../assets/css/",
        'views'=>"../views/",
        'controllers'=>"../controllers/",
        'models'=>"../models/",
        'core'=>"../core/",
        'functions'=>"../functions",
        'assets'=>"../assets/",
        'css'=>"../assets/css/",
        'bootstraps-min'=>"../assets/css/bootstrap.min.css",
        'bootstrap-icons'=>"../assets/css/",
        'css'=>"../assets/css/",
        'profiles'=>"../assets/profiles/",
        'bootstrap-icons'=>"../assets/bootstrap-icons/"
    );

    public function __construct()
    {
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $this->route['base_uri'] = 'https://';
        } else {
            $this->route['base_uri'] = 'http://';
        }
        $this->route['base_uri'] .= $_SERVER['HTTP_HOST'];	
        // header('Location: '.$uri.'/dashboard/');
        // exit;
    }

    public function getRoute(){
        return $this->route;
    }
}

?>