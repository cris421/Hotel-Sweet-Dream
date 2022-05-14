<?php
$conexion = mysqli_connect("localhost","root","","bd_hotel sweet dreams");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$destino = $_POST["destino"];
$dias = $_POST["dias"];
$valor = $_POST["valor"];
$descuento = $_POST["descuento"];

    $insertarSQL = "INSERT INTO reservas(nombre, correo, telefono, destino, dias, valor, descuento) VALUES ('$nombre','$correo','$telefono','$destino','$dias','$valor', '$descuento')";
    $resultado = mysqli_query($conexion,$insertarSQL);
    if($resultado){
        echo "<script>alert('se ha enviado su reserva'); window.location='index.html'</script>";
    }else{
        printf("Errormessage: %s\n",mysqli_error($conexion));
    }
