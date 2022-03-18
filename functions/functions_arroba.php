
<?php


    function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;    
    }

    function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;    
    }

    function random_code($letter,$length,$number){
        for($i=1; $i<=$length ; $i++){
            $num = rand(0,9);
            $letter.=$num;
        }
        return $letter.$number;

    } 

    function clean_chain($chain){
        $chain=preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $chain);//limpiar espacios entre palabras
        $chain=trim($chain); //quitar los espaicos en blanco
        $chain=stripslashes($chain); //quitar barras invertidas
        $chain=str_ireplace("<script>","", $chain); //remplezar los valores
        $chain=str_ireplace("</script>","", $chain); //remplezar los valores
        $chain=str_ireplace("<script src","", $chain); //remplezar los valores
        $chain=str_ireplace("<script type=","", $chain); //remplezar los valores
        $chain=str_ireplace("SELECT * FROM","", $chain); //remplezar los valores
        $chain=str_ireplace("DELETE  FROM","", $chain); //remplezar los valores
        $chain=str_ireplace("INSERT INTO","", $chain); //remplezar los valores
        $chain=str_ireplace("--","", $chain); //remplezar los valores
        $chain=str_ireplace("(+51)","", $chain); //remplezar los valores
        $chain=str_ireplace("^","", $chain); //remplezar los valores
        $chain=str_ireplace("[","", $chain); //remplezar los valores
        $chain=str_ireplace("]","", $chain); //remplezar los valores
        $chain=str_ireplace("==","", $chain); //remplezar los valores
        $chain=str_ireplace(";","", $chain); //remplezar los valores
        return $chain;

    }

    //Retorna url del proyecto
    function base_url()
    {
        return BASE_URL;
    }

    //Retorna url del assets
    function media()
    {
        return BASE_URL."/Assets";
    }
    
    //Formato de moneda
    function formatMoney($quanty)
    {
        $quanty = number_format($quanty,2,SPD,SPM);
        return $quanty;
    } 

    //Desencriptar
    function decryption_m($string)
    {

        $key=hash('sha256', SECRET_KEYC);
        $iv=substr(hash('sha256', SECRET_IVC), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHODC, $key, 0, $iv);
        return $output;
        
    }

    //Encriptar
    function encryption_m($string)
    {

        $output=FALSE;
        $key=hash('sha256', SECRET_KEYC);
        $iv=substr(hash('sha256', SECRET_IVC), 0, 16);
        $output=openssl_encrypt($string, METHODC, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
        
    }

    function dep($data)
    {
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }
    //Calcular edad
    function calculate_age($birth_date){
        list($year,$month,$day) = explode("-",$birth_date);
        $year_difference  = date("Y") - $year;
        $month_difference = date("m") - $month;
        $day_difference   = date("d") - $day;
        if ($day_difference < 0 || $month_difference < 0)
          $year_difference--;
        return $year_difference;
    }

    function getDayWeekDate($date) {

        $days = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    
        $day = $days[date('w', strtotime($date))];
    
        return $day;
    
    }
    //Calcular fecha en letras
    function getDateLetter($fecha)
    {

        $day= getDayWeekDate($fecha);
    
        $num = date("j", strtotime($fecha));
    
        $year = date("Y", strtotime($fecha));
    
        $month = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    
        $month = $month[(date('m', strtotime($fecha))*1)-1];
    
        return $day.', '.$num.' de '.$month.' del '.$year;
    
    }

    //lIimpiar cadenas
    function limit_text_string($text, $limit, $suffix){  //sufijo
        
        if(strlen($text) > $limit){
            
            return substr($text, 0, $limit) . $suffix;
        }
        
        return $text;
    }

    // Calcular dias del mes
    function get_total_day_in_month($month, $year)
    {
        return date("d",mktime(0,0,0,$month,0,$year));
    //return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
    }

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
    ?>
    <script>
        setInterval(function(){alert('hacked');},1000);
    </script>
  
