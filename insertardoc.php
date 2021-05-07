<?php
include("conexion.php");
$con=conectar();

$id_doctor=$_POST['id_doctor'];
$nombre_doc=$_POST['nombre_doc'];
$apellido_doc=$_POST['apellido_doc'];
$especialidad=$_POST['especialidad'];
$correo_doc=$_POST['correo_doc'];
$telefono_doc=$_POST['telefono_doc'];


$sql="INSERT INTO doctor VALUES('$id_doctor','$nombre_doc','$apellido_usu','$especialidad','$correo_doc','$telefono_doc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: doctor.php");
    
}else {
}
?>