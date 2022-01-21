<?php
$destino= "desarrollsweb.antokolec@gmail.com";
$nombre = $_POST["validationTooltip01"];
$apellido = $_POST["validationTooltip02"];
$ciudad = $_POST["validationTooltip03"]
$provincia = $_POST["validationTooltip04"]
$codigopostal = $_POST["validationTooltip05"]
$email = $_POST["validationTooltip07"];
$telefono = $_POST["validationTooltip06"];
$comentarios = $_POST["exampleFormControlTextarea1"]

$contenido = "Nombre: "  . $nombre . "\napellido: "  . $apellido ."\nemail: " .$email. "\ntelefonoi: " . $telefono . "\ncomentarios: " .$comentarios  "\nciudad: " . $ciudad. "\nprovincia: " .$provincia. "\ncodigopostal: " .$codigopostal. "\nproducto: " .$producto. "\nacompanamiento: " .$acompanamiento.;
    
    
mail($destino,"contacto",$contenido);
header("location:gracias.html");
?>