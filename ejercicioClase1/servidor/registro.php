<?php 

//var_dump($_POST);

$nombre = $_POST["nombre"];
$apellido = $_POST['apellido'];
$fechanac = $_POST['fechanac'];
$email = $_POST['email'];
$password = $_POST['password'];


echo $nombre;
echo '<br>';
echo $apellido;
echo '<br>';
echo $fechanac;
echo '<br>';
echo $email;
echo '<br>';
echo $password;