
<?php
    require("controllers/uri_controller.php");
    $uri = new Uri();
    
    print_r($uri->getParse_uri());
    echo "<br>".$uri->getParse_uri()['path'];
    // echo $path['Path'];
    // echo $uri->getUri();
    echo "<br><br>";

    if(isset($_GET['view'])){
        echo "view";
    }else{

    }

    if (isset($_GET['views'])){
        echo "view: ".$_GET['views'];
    }
    

    echo "<br><br>";
    // echo $uri->getUriPaths();
    print_r($uri->getUriPaths());
    echo "<br>".$uri->getUriPaths()[1];

    // require("models/birth_certificate_model.php");
    // require('views/view-main.php');

    // require('models/user_model.php');
    require('controllers/login_controller.php');
    session_start();
    $login = new Login_controller();
    
    echo "<br>";
    foreach($login->run_simple_query('select * from user') as $row){
        echo $row['user_username']."<br>";
        echo $row['user_password']."<br>";
        echo $row['user_email']."<br>";
    }
    // var_dump(json_encode($login->run_simple_query('select * from user')));
    
    
    // if($user->exists("user_username","manuco"))
    //     echo "existe usuario";
    // else
    //     echo "no existe usuario";

    require('models/municipality_model.php');
    $muni = new Municipality_model();
    $data = $muni->getMunicipality();
    if($data){
        foreach ($data as $m){
            echo $m['muni_name'];
        } 
    }
    
    
    // $data['muni_name'] = "Municipalidad Distrital de Talavera";
    // $data['muni_address'] = "Av. Jose Maria Arguedas SN";
    // $data['muni_logo'] = "not file";
    // $data['muni_ruc'] = "2060253659";
    // $data['muni_web_site'] = "munisanji.gob.pe";
    
    // if($muni->insert($data)){
    //     var_dump($data);
    //     echo "<h1>se registro correctamente</h1>";
    // }else{
    //     echo "<h1>Error al registrar</h1>";
    // }


    $email = "asdsdff@gmail.com"; 
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

    $email = (preg_match($regex, $email))?$email:"invalid email";
    echo $email."<br>";
    $pass='holaasasdfsd';
    $pass = (preg_match('`[0-9]`', $pass))?$pass:"invalid pass";;
    echo $pass.'<br>';
    $clave ="dgd12"; 
    if (!preg_match('`[0-9]`',$clave)){
        echo 'debe contener al menos un numero';
    }
