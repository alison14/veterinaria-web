<?php

include("conexion.php");
$con=conectar();

$id_mascota=$_GET['idm'];

$sql="DELETE FROM mascota  WHERE id_mascota='$id_mascota'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mascota.php");
    }
?>