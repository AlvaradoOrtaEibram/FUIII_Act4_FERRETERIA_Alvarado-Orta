<?php

include("con_db.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$curp=$_POST['curp'];
$telefono=$_POST['telefono'];
$fecha_reg=$_POST['fecha_reg'];

$sql="UPDATE empleados SET idempleado= '$idempleado', nombres='$nombres',apellidos='$apellidos',correo='$correo',curp='$curp',telefono = '$telefono', fecha_reg = '$fecha_reg'
WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>