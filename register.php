<?php

//incluir el archivo de conexión

include_once('db_conn.php');



//verificar si el form ha sido enviado, insertar data de usuario dentro de la base de datos

if(isset($_POST['register'])){

    $name = $_POST['name'];

	$lastname = $_POST['lastname'];

    $dni = $_POST['dni'];

    $email= $_POST['email'];

    $password = $_POST['password'];

	$passwordconfirm = $_POST['passwordconfirm'];



    //si el email existe, muestre error

    $email_result = mysqli_query($conn,"SELECT 'email' FROM user where dni= '$dni'and email='$email' and password='$password' and passwordconfirm='$passwordconfirm'");



    //muestre cuantas filas son consultadas

    $user_match = mysqli_num_rows($email_result);



    //si el numero de filas retornadas son mas que 0; significa que el email ya existe, si las contraseñas no coinciden

    if($user_match >0){

        echo "El usuario con este email '$email' ya existe";

    } elseif($password!=$passwordconfirm){

		echo "Las contraseñas no coinciden";

	}else{

        //insertar la data dentro de la base de datos

        $result = mysqli_query($conn,"INSERT INTO user(name,lastname,dni,email,password) VALUES('$name','$lastname','$dni','$email','$password')");



        //si la data ha sido insertada exitosamente

        if($result){

            echo "Registro exitoso!";

        }else{

            echo "error de registro, intente nuevamente".mysqli_error($conn);

        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
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
					REGISTRESE AQUÍ
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="register.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su nombre">
						<input class="input100" type="text" name="name" placeholder="Nombre">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese sus apellidos">
						<input class="input100" type="text" name="lastname" placeholder="Apellidos">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese su dni">
						<input class="input100" type="text" name="dni" placeholder="Dni">
						<span class="focus-input100" data-placeholder="&#128443;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Ingrese su email">
						<input class="input100" type="email" name="email" placeholder="Correo electrónico">
						<span class="focus-input100" data-placeholder="&#128386;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese una contraseña">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirme su contraseña">
						<input class="input100" type="password" name="passwordconfirm" placeholder="Confirma tu contraseña">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="register" type="submit">
							Registrarse
						</button>
					</div>
				

                    <p class="text-center mt-3">Ya tiene una cuenta? <a style="color: #d41872;" href="login.php">Ingrese aquí </a> 
                                </p>

                    

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

                    