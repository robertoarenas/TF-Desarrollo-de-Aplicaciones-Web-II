<?php
//session para iniciar nuestra sesion en PHP
session_start();

//crear la conexion usando nuestro archivo db_conn.php
include_once('db_conn.php');

//si el formulario a subir tiene email y password completo
if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password = $_POST['password'];

    //Verificar si el usuario/filas ya existe
    $result = mysqli_query($conn,"SELECT 'email','password' FROM user where email='$email' and password='$password'");

    //muestre cuantos usuarios son

    $user_match = mysqli_num_rows($result);

    //si el usuario con el email existe nos mande a una pagina ejemplo

    if($user_match >0){

        $_SESSION['email']=$email;
        header("location:main.php");

    } else{

        header("location:error.php");
        
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ingreso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					INGRESE A SU CUENTA
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="login.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su email">
						<input class="input100" type="email" name="email" placeholder="Correo electrónico">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese su contraseña">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="login"  type="submit">
							Login
						</button>
					</div>

          <a  style="color: #ffffff;" href="#!">Olvidó su contraseña?</a>
          <p  class="text-center mt-3" style="color: #393f81;">No tiene una cuenta? <a href="register.php"
            style="color: #d41872;">Registrese aquí</a></p>

				</form>
			</div>
		</div>
	</div>

	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
