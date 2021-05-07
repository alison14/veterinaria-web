<?php
include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre_usu=$_POST['nombre_usu'];
$apellido_usu=$_POST['apellido_usu'];
$correo_usu=$_POST['correo_usu'];
$telefono_usu=$_POST['telefono_usu'];


$sql="INSERT INTO usuario VALUES('$id_usuario','$nombre_usu','$apellido_usu','$correo_usu','$telefono_usu')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>