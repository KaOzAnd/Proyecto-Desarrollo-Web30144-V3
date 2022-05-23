<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['id'];
    $titulo = $_POST['txtTitulo'];
    $descripcion = $_POST['txtDescripcion'];
    date_default_timezone_set('America/Bogota');
    $fecha=date("Y-m-d H:i:s");

    $sentencia = $bd->prepare("UPDATE tareas SET title = ?, description = ?, created = ? where id = ?;");
    $resultado = $sentencia->execute([$titulo, $descripcion, $fecha, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>