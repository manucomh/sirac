
<?php
    
    require_once('functions/functions_arroba.php');
    echo "email ".validate_email("hilalhj12@dd..ghk.com");
    
    
    require_once('classes/Sireci.php');
    
    Sireci::run();



    $email = "asdsdff@gmail.com"; 
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

    $email = (preg_match($regex, $email))?$email:"invalid email";
    echo $email."<br>";
    $pass='holaasasdfsd';
    $pass = (preg_match('`[0-9]`', $pass))?$pass:"invalid pass";
    echo $pass.'<br>';
    $clave ="dgd12"; 
    if (!preg_match('`[0-9]`',$clave)){
        echo 'debe contener al menos un numero';
    }

