<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $valor = $_POST['txtValor'];
    $sentencia = $bd->prepare("UPDATE productos SET nombre = ?, descripcion = ?, valor = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $descripcion, $valor, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>