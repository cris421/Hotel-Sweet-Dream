<?php
$conexion = mysqli_conect("localhost","root","","bd_hotel sweet dreams");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$destino = $_POST["destino"];
$mensaje = $_POST["mensaje"];

if($subirarchivo){
    $insertarSQL = "INSERT INTO reservas(nombre, correo, telefono, destino, mensaje) VALUES ('$nombre','$correo','$telefono','$destino','$mensaje')";
    $resultado = mysqli_query($conexion,$insertarSQL);
    if($resultado){
        echo "<script>alert('se ha enviado su reserva'); window.location='index.html'</script>";
    }else{
        printf("Errormessage: %s\n",mysqli_error($conexion));
    }
}