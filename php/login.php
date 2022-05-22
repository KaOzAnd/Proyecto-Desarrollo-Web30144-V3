<?php
include_once './db.php';
if (empty($_POST['email']) || empty($_POST['password'])) {
  header('Location: ../iniciar_seccion.php?mensaje=falta');
  exit();
} else {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT id, email, password FROM usuario WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_array($result);
    if (password_verify($password, $usuario['password'])) {
      header("Location: ../seleccion.php");
    }else {
      header('Location: ../iniciar_seccion.php?mensaje=password');
  }
  }else {
    header('Location: ../iniciar_seccion.php?mensaje=correo2');
  }
}
