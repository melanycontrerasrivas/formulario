<?php 
$destino= "Mariamrebe@hotmail.com";
$Nombre= $_POST["Nombre"];
$Correo= $_POST["Correo"];
$Mensaje= $_POST["Mensaje"];
$contenido = "Nombre: ". $Nombre . "\nCorreo: " .$Correo . "\nMensaje:" .$Mensaje;
mail($destino, "contacto", $contenido);
header("location:gracias.html");
<?