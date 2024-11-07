<?php

namespace App\Controller;
use App\Controller\InterfaceController;
use Ramsey\Uuid\Uuid;
use App\Class\Usuario;
include_once "InterfaceController.php";


class UsuarioController implements InterfaceController
{

    //GET /users
    public function index(){
        include_once __DIR__."/../View/Users/indexUser.php";
    }

    //GET /users/create
    public function create(){
        //Aquí mostraríamos el formulario de registro
        include_once __DIR__."/../View/Users/createUser.php";

    }

    //POST /users
    // En UsuarioController
    // En UsuarioController, archivo App/Controller/UsuarioController.php
    public function store()
    {
        // Obtener los datos enviados desde el formulario
        $datos = $_POST;

        // Validación de los datos
        $errores = Usuario::validarUsuario($datos);

        if (!empty($errores)) {
            // Si hay errores, mostramos los mensajes de error
            foreach ($errores as $campo => $error) {
                echo "<p>Error en $campo: $error</p>";
            }
        } else {
            // No hay errores, crear y guardar el usuario
            $usuario = new Usuario();
            $usuario->setUsername($datos['username']);
            $usuario->setPassword(password_hash($datos['password'], PASSWORD_BCRYPT));
            $usuario->setCorreoelectronico($datos['correoelectronico']);
            // Asignar otros campos si es necesario

            // Aquí deberías guardar el usuario en la base de datos
            echo Uuid::uuid4();  // Para el UUID
            echo "Usuario guardado correctamente";
        }
    }


    //GET /users/{id_usuario}/edit
    public function edit($id){
        //Mostraría un formulario con los datos del usuario
        echo "Formulario para editar los datos del usuario $id";

    }


    //PUT /users/{id_usuario}
    public function update($id){
        //Guardaría los datos modificados del usuario
        echo "Función para actualizar los datos en la BD del usuario $id";

    }


    //GET /users/{id_usuario}
    public function show($id){
        //Mostraría los datos de un solo usuario
        echo "Mostar los datos del usuario $id";
    }


    //DELETE /users/{id_usuario}
    public function destroy($id){
        //Borrar los datos de un usuario
        echo "Función para borrar los datos del usuario $id";
    }

}