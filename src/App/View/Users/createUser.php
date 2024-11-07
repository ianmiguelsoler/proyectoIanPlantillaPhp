<?php
$titulo = "Registro de usuario";
include_once "./environment.php";
include_once DIRECTORIO_VISTAS . "template/inicio.php";
include_once DIRECTORIO_VISTAS . "template/arribaNavegacion.php";
include_once DIRECTORIO_VISTAS . "template/navegacion.php";
?>

<section id="services" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h1>Registrar Usuario</h1>
                    <p class="mx-auto">Introduce tus datos para empezar a gestionar todas tus reservas</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-8 h-100">
            <div class="service">
                <h5>Registrarse como usuario</h5>
                <form method="post" action="/register">
                    <div class="mb-3">
                        <label class="form-label" for="user">Nombre de usuario</label>
                        <input class="form-control" id="user" name="username" type="text" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pass">Contraseña</label>
                        <input class="form-control" id="pass" name="password" type="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Correo electrónico</label>
                        <input class="form-control" id="email" name="correoelectronico" type="email" required>
                    </div>
                    <input class="btn btn-brand ms-lg-3" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include_once DIRECTORIO_VISTAS . "template/footer.php";
include_once DIRECTORIO_VISTAS . "template/modal.php";
include_once DIRECTORIO_VISTAS . "template/final.php";
?>
