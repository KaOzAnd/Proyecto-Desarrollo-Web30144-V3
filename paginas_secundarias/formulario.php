<?php
require '../header.php'
?>
  <link rel="stylesheet" href="../css/estilos_formulario.css">
  <!--Formulario -->
  <section class="formulario">
    <form action="../php/validacion.php" class="contact_form" method="post">
      <ul>
        <li>
          <h1>ENVIE SUS QUEJAS O COMENTARIOS</h1>
        </li>
        <li>
          <label for="name">Nombre</label>
          <input type="text" name="nombres" placeholder="ej. juan jose cruz" required>
        </li>
        <li>
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="ej. jricardo@ejemplo.com" required>
        </li>
        <li>
          <label for="website">Sitio web</label>
          <input type="url" name="web" placeholder="ej. https//yahoo.com" required>
        </li>
        <li>
          <label for="Mensaje">Mensaje</label>
          <textarea name="comentarios" cols="40" rows="6" required></textarea>
        </li>
        <li>
          <button type="submit" class="submit" name="enviar_datos">Enviar Datos</button>
        </li>
      </ul>
    </form>
  </section>
  <section class="consulta">
    <div class="tabla">
      <br>
      <h2>Consulta de los datos alamacenados en la BD</h2>
      <table border = 1>
        <tr>
          <th>Nombres</th>
          <th>Email</th>
          <th>URL</th>
          <th>Comentarios</th>
        </tr>
        <?php
        require_once '../php/conexion.php';
        $consulta = "SELECT * FROM informacion";
        $ejecutarConsulta = mysqli_query($mysqli, $consulta);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);

        if (!$ejecutarConsulta) {
          echo "Error en la consulta";
        }else {
          if ($verFilas<1){
            echo "<tr><td>Sin registros</td></tr>";
          }else{

            for ($i=0; $i<=$fila; $i++){
            echo '
            <tr>
            <td>'.$fila[0].'</td>
            <td>'.$fila[1].'</td>
            <td>'.$fila[2].'</td>
            <td>'.$fila[3].'</td>
            
            </tr>
            ';
            $fila = mysqli_fetch_array($ejecutarConsulta);
            }
          }
        }
        ?>
      </table>
    </div>
  </section>
  <!-- Pie de Pagina-->
  <?php
require '../footer.php'
?>