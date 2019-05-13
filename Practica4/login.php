<?php
include 'database.php';
$res="";
if(isset($_POST['aceptar'])){
	$usrs = $_POST['usuario'];
	$passs = $_POST['contra'];
	$asd = new Database();
	$res = $asd->inicio($usrs,$passs);
	if ($res){

	}else{
		header("Location: index.php");
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="assets/styles/style.min.css">

	<!-- Efectos de ola -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

</head>

<body>
 
<div id="single-wrapper">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="frm-single">
		<div class="inside">
			<!-- Titulos -->
			<div class="title"><strong>Dis</strong>Fruta</div>
			<div class="frm-title">Inicio de Sessión</div>

			<!-- Cajas de texto para usuario y contraseña -->
			<div class="frm-input"><input name="usuario" id="user" type="text" placeholder="Usuario" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<div class="frm-input"><input name="contra" type="password" placeholder="Contraseña" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			
			<!-- Controles extras -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Recordarme</label></div>
				</div>
				
				<div class="pull-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Olvide mi contraseña</a></div>
				
			</div>
			

			<!-- Boton para inicio de session-->
			<button name="aceptar" id="submit" type="submit" class="frm-submit">Iniciar<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
					<div class="txt-login-with txt-center">O inicia con</div>
					
				</div>

				<!-- Botones secundarios -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>
			</div>

			<!-- Area para registrar un nuevo admin -->
			<a href="page-register.html" class="a-link"><i class="fa fa-key"></i>Eres nuevo?</a>
			<div class="frm-footer">Halfonso © 2019.</div>
			
		</div>
		
	</form>
	
</div>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>