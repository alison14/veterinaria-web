<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre_usu=$_POST['nombre_usu'];
$apellido_usu=$_POST['apellido_usu'];
$correo_usu=$_POST['correo_usu'];
$telefono_usu=$_POST['telefono_usu'];

$sql="UPDATE usuario SET  nombre_usu='$nombre_usu',apellido_usu='$apellido_usu', correo_usu='$correo_usu', telefono_usu='$telefono_usu' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>