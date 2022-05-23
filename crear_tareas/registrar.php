<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtTitulo"]) || empty($_POST["txtDescripcion"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $titulo = $_POST["txtTitulo"];
    $descripcion = $_POST["txtDescripcion"];
    date_default_timezone_set('America/Bogota');
    $fecha=date("Y-m-d H:i:s");
    
    $sentencia = $bd->prepare("INSERT INTO tareas (title,description,created) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$titulo,$descripcion,$fecha]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>