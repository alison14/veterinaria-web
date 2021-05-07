<?php
include("conexion.php");
$con=conectar();

$id_mascota=$_POST['id_mascota'];
$id_usuario=$_POST['id_usuario'];
$nombre_masco=$_POST['nombre_masco'];
$tipo_mascota=$_POST['tipo_mascota'];
$raza=$_POST['raza'];
$color=$_POST['color'];


$sql="INSERT INTO mascota VALUES('$id_mascota','$id_usuario','$nombre_masco','$tipo_mascota','$raza','$color')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: mascota.php");
    
}else {
}
?>