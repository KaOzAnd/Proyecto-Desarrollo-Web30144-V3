
<?php
require './php/header_indexlog.php'
?>
<div class="card mx-auto " style="width: 600px;">
  <div class="card-header" style="text-align: center;">
  <h1 class="card-title">MUNDO BIKERS</h1>
  </div>
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title row justify-content-center">BIENVENIDOS!!</h5>
    <p class="card-text row justify-content-center">Seleccione que accion desea realizar</p>
    <a href="./paginas_secundarias/index.php" class="btn btn-primary">HOME MUNDO BIKERS</a>
    
    
    <div class="card-body" style="text-align: center;">
    <a href="./CRUD_personas/index.php" class="btn btn-primary">Registrar Persona</a>
    <a href="./CRUD_tareas/index.php" class="btn btn-primary">Registrar Tarea</a>
    <a href="./CRUD_productos/index.php" class="btn btn-primary">Registrar Productos</a>
    </div>
  </div>
</div>
<?php
require ("./php/footer_indexlog.php");
?>