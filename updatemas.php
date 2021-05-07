<?php

include("conexion.php");
$con=conectar();

$id_mascota=$_POST['id_mascota'];
$id_usuario=$_POST['id_usuario'];
$nombre_masco=$_POST['nombre_masco'];
$tipo_mascota=$_POST['tipo_mascota'];
$raza=$_POST['raza'];
$color=$_POST['color'];

$sql="UPDATE mascota SET  id_usuario='$id_usuario',nombre_masco='$nombre_masco',tipo_mascota='$tipo_mascota', raza='$raza', color='$color' WHERE id_mascota='$id_mascota'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mascota.php");
    }
?>