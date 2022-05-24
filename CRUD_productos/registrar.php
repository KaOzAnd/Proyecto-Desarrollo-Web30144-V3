<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtDescripcion"]) ||empty($_POST["txtValor"]) ){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $descripcion = $_POST["txtDescripcion"];
    $valor = $_POST["txtValor"];

    
    $sentencia = $bd->prepare("INSERT INTO productos (nombre,descripcion,valor) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$descripcion,$valor]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>