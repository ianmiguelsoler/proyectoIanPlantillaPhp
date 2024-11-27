<?php
$titulo="Edicion de Usuario";
include_once "./environment.php";
include_once DIRECTORIO_VISTAS."template/inicio.php";
include_once DIRECTORIO_VISTAS."template/arribaNavegacion.php";
include_once DIRECTORIO_VISTAS."template/navegacion.php";
?>

    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Editar Usuario</h1>
                        <p class="mx-auto">Introduce tus datos para empezar a gestionar todas tus reservas</p>
                    </div>
                </div>
            </div>
               <div class="col-lg-12 col-md-8 h-100">
                    <div class="service">
                        <form method="post" action="/users/<?=$id?>">
                            <div class="mb-3">
                                <label class="form-label" for="user">Nick de usuario</label>
                                <input class="form-control" id="user" name="usernick" type="text" value="<?=$usuario->getUsername()?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="dni">DNI del usuario</label>
                                <input class="form-control" id="dni" name="userdni" type="text" value="<?=$usuario->getDni()?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Nombre de usuario</label>
                                <input class="form-control" id="name" name="username" type="text" value="<?=$usuario->getNombre()?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="surname">Apellidos de usuario</label>
                                <input class="form-control" id="surname" name="usersurname" type="text" value="<?=$usuario->getApellidos()?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="pass">Contraseña</label>
                                <input class="form-control" id="pass" name="userpass" type="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Correo electrónico</label>
                                <input class="form-control" id="email" name="useremail" type="email" value="<?=$usuario->getCorreoelectronico()?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="birthdate">Fecha de nacimiento</label>
                                <input class="form-control" id="birthdate" name="userbirthdate" type="text" value="<?=$usuario->getFechanac()->format('d/m/y')?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="adress">Dirección</label>
                                <input class="form-control" id="adress" name="useradress" type="text" value="<?=$usuario->getDireccion()?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="phone">Teléfono de contacto</label>
                                <input class="form-control" id="phone" name="userphone" type="tel" value="<?=$usuario->getTelefonos()[0]->obtenerTelefonoFormateado()?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="altphone">Teléfono alternativo</label>
                                <input class="form-control" id="altphone" name="useraltphone" type="tel" value="<?=$usuario->getDatosAdicionales()?>">
                            </div>
                            <input class="btn btn-brand ms-lg-3" value="Enviar" type="submit">
                        </form>
                    </div>
                </div>
            </div>
    </section>

<?php
include_once DIRECTORIO_VISTAS."template/footer.php";
include_once DIRECTORIO_VISTAS."template/modal.php";
include_once DIRECTORIO_VISTAS."template/final.php";
