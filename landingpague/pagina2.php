<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefonico = $_POST['telefonico'];
$mensaje = $_POST['mensaje'];

echo $nombre. "ha dicho:<br/>".$mensaje;


if (mail ('coordinacion@gruposanar.com.co',$nombre, $correo, $telefonico, $mensaje )) {
 if (empty($nombre)){
        echo "<p class='error'>* Agrega Nombre</p>";
 }else{
    if (empty($correo)) {
        echo "<p class='error'>* Agrega Correo</p>";
    }else {
        if (empty($telefonico)) {
            echo "<p class='error'>* Agrega Numero Teléfonico</p>";
        }else {
            if (empty($mensaje)) {
                echo "<p class='error'>* Agrega Ciudad / Municipio actual</p>";
            }else {
                header('Location: gracias.html'); 
            }
        }
    }
 }

 
}else{
    echo "datos incorrectos";
}
?>