<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['id'];

    $sentencia = $bd->prepare("select * from tareas where id = ?;");
    $sentencia->execute([$codigo]);
    $tereas = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
    date_default_timezone_set('America/Bogota');
    $fecha=date("Y-m-d H:i:s");
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="txtTitulo" required 
                        value="<?php echo $tereas->title; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion: </label>
                        <input type="text" class="form-control" name="txtDescripcion" autofocus required
                        value="<?php echo $tereas->description; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha Modificacion: </label>
                        <input type="datetime" class="form-control" name="txtFecha" placeholder="<?= $fecha?>" disabled>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $tereas->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>