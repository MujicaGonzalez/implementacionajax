<?php

$conexion = mysqli_connect("localhost", "root", "", "usuarios");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["pass"];

$sel = "SELECT * FROM mis_usuarios WHERE email='$email'";

$ejecutar = mysqli_query($conexion, $sel);

$chequear_email = mysqli_num_rows($ejecutar);

if ($chequear_email == 1) {
	echo "<h2>El email ya se encuentra registrado, ingrese otro </h2>";
	exit();
}else{
	$insertar = "INSERT INTO mis_usuarios(nombre, email, password) VALUES ('$nombre', '$email', '$password')";
	$ejecutar = mysqli_query($conexion, $insertar);

	if ($ejecutar) {
		echo "<h2>El usuario ha sido registrado con exito</h2>";
		// code...
	}
}
?>