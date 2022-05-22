<?php
include_once './conexion.php';
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirn_password'])) {
  header('Location: ../registrar.php?mensaje=falta');
exit();

}else{
  $email = $_POST['email'];
  $sentencia = $bd->prepare("SELECT * FROM usuario WHERE email = ?");
  $sentencia-> execute([$email]);
  $NumeroDeFilas = $sentencia->fetchColumn();
  if($NumeroDeFilas > 0){
    header('Location: ../registrar.php?mensaje=correo');
    exit();
  }else  {
    if(strlen($_POST['password']) < 8 ){
      header('Location: ../registrar.php?mensaje=password');
    exit();
    }else {
      if ($_POST['password'] == $_POST['confirn_password']) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sentencia = $bd->prepare("INSERT INTO usuario(email,password) VALUES (?,?);");
        $resultado = $sentencia->execute([$email,$password]);
        if ($resultado == TRUE) {
          header('Location: ../registrar.php?mensaje=registrado');
        }else{
          header('Location: ../registrar.php?mensaje=error');
          exit();
        }
      }else {
        header('Location: ../registrar.php?mensaje=password_2');
        exit();
      }
    }
  }
}
?>