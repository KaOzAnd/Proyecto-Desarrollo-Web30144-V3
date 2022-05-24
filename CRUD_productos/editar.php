<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['id'];

    $sentencia = $bd->prepare("select * from productos where id = ?;");
    $sentencia->execute([$codigo]);
    $productos = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
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
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $productos->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion: </label>
                        <textarea name="txtDescripcion" rows="10" class="form-control" autofocus required><?php echo $productos->descripcion; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha Modificacion: </label>
                        <input type="text" class="form-control" name="txtValor" autofocus required
                        value="<?php echo $productos->valor; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $productos->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>