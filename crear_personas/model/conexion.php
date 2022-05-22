<?php
$database = 'datos_formulario';
$username = 'root';
$password = '';

try {
  $bd = new PDO(
    'mysql:host=localhost;dbname='.$database,$username,$password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
  );
}catch(Exception $e) {
  echo "Problema con la conexion: ".$e->getMessage();
}

?>