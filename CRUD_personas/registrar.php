<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) || empty($_POST["txtCorreo"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $correo = $_POST["txtCorreo"];
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,apellido,correo) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$correo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>