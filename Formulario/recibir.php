<?php
// print_r($_POST);

if(!$_POST){
    header('Location: http://localhost/test/Clase/TareaClase/DPL/Formulario/');

}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];

echo "Hola $nombre es de sexo: $sexo";

// echo "Bienvenido";

?>
