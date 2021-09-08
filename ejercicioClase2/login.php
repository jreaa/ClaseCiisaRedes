<?php 

session_start();

//var_dump($_POST);

//echo "testing";

$nombre = "jose";
$contraseña = "1234";

//and, or
// &&, ||

if(isset($_POST['btn'])){
    if(!empty($_POST['nombre']) && $nombre == $_POST['nombre']){
        if(!empty($_POST['contraseña']) && $contraseña == $_POST['contraseña']){
            $_SESSION['bienvenido']  = "Bienvenido!!";
            header("Location: index.php");
        }else{
            $_SESSION['contraseña'] = "Tu contraseña esta en blanco o incorrecta";
            header("Location: index.php");
        }
    }else{
        $_SESSION['nombre'] = "Tu nombre esta en blanco o es incorrecto";
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}



