<?php include './php/header_indexlog.php' ?>
<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Rellena todos los campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registrado!</strong> Se agregaron los datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Vuelve a intentar.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'correo') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> El Correo ya se encuentra registrado.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'password') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> La contraseña debe tener 8 caracteres.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'password_2') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Las contraseñas no coinciden.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>


        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                        <h1 class="card-title">Registrarse</h1> ó <a href="./iniciar_seccion.php">Iniciar Sesión</a></br>
                            Ingresar datos:
                        </div>
                        <form class="p-4" method="POST" action="./php/register.php">
                            <div class="mb-3">
                                <label class="form-label">Correo: </label>
                                <input type="email" class="form-control" name="email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña: </label>
                                <input type="password" class="form-control" name="password" autofocus required autocomplete="off" placeholder="minimo 8 caracteres...">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="confirn_password" autofocus required autocomplete="off" placeholder="confirme contraseña....">
                            </div>
                            <div class="d-grid">
                                <input type="hidden" name="oculto" value="1">
                                <input type="submit" class="btn btn-primary" value="Registrar">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</div>



<?php include './php/footer_indexlog.php' ?>