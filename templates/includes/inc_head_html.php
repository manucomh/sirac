<!DOCTYPE html>
<html lang="<?php echo "es"; ?>">
<head>
    <!-- Agregar basepath para definir a partir de donde se deben generar los enlaces y la carga de archivos -->
    <base href="<?php echo BASEPATH; ?>">

    <meta charset="UTF-8">
    
    <title><?php echo isset($d->title) ? $d->title.' - '.get_sitename() : 'Bienvenido - '.get_sitename(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- inc_styles.php -->
    <?php require_once INCLUDES.'inc_styles.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
            
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        ::selection{
            background: rgba(26,188,156,0.3);
        }

    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <?php echo '<link rel="stylesheet" href="'.CSS.'login.css">'; ?>
    <?php echo '<link rel="stylesheet" href="'.CSS.'header_main_style.css">'; ?>
    <?php echo '<link rel="stylesheet" href="'.CSS.'side_menu_nav_main_style.css">'; ?>
</head>

<body class="<?php echo isset($d->bg) && $d->bg === 'dark' ? 'bg-dark' : 'bg-light' ?>" style="<?php echo 'padding: '.(isset($d->padding) ? $d->padding : '0px 0px'); ?>">
<!-- ends inc_header.php -->
    