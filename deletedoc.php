<?php

include("conexion.php");
$con=conectar();

$id_doctor=$_GET['idc'];

$sql="DELETE FROM doctor  WHERE id_doctor='$id_doctor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: doctor.php");
    }
?>