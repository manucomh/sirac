<?php
	if (isset($_POST['usuario']) && isset($_POST['clave'])) {
		// require_once "./Controllers/loginControllers.php";
		// $login = new loginControllers();
		// echo $login->login_controller();
	}
	if(isset($_SESSION['token_str'])){
		// if($_SESSION['type_str']=="Administrador"){
		// 	$url=base_url()."/dashboard/";
		// }else{
		// 	$url=base_url()."/product_catalog/";
		// }
		// // header('location:'.$url);
		// echo $urlLocation='<script>window.location="'.$url.'"</script>';
	}
?>
<!-- Vista Login -->

<div class="login-box">
  	<div class="login-logo">
		<a href="<?= base_url(); ?>">
			<img src="<?= media(); ?>/images/iconos/logo_3.png">
		</a>
	</div>
  	<div class="card">
    	<div class="card-body login-card-body">
		<div class="text-center mb-2">
		<a class="company text-xl" href="https://www.facebook.com/onecreha" target="_blank">onecreha</a>
		</div>
			<p class="login-box-msg">-INGRESE SUS CREDENCIALES-</p>
      		<form action="" method="POST" autocomplete="off" >
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="usuario" placeholder="Usuario" required="">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="clave" placeholder="Contraseña" required="">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
        			<button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
      			<p class="mt-2 mb-0 text-right">Versión 1.0.0</p>

      		</form>

        </div>

  	</div>

	<div class="text-center small">
		<strong>Copyright &copy; <?= Date("Y")?>  <a class="company" href="https://www.facebook.com/onecreha" target="_blank">onecreha</a></strong>
		Todos los derechos reservados.
		<!-- <div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 1.0.0
		</div> -->
	</div>
</div>
<!-- /.Vista Login -->
