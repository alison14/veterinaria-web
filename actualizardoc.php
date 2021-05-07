<?php 
    include("conexion.php");
    $con=conectar();

$idc=$_GET['idc'];

$sql="SELECT * FROM doctor WHERE id_doctor='$idc'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <style>

        body{
            background-image: url(image/bg8.jpg);
        }
        
        .container{
            width: 100%;
            max-width: 1200px;
            margin: auto;
            margin-top: 50px;
            background: rgba(0,0,0,0.6);
            text-align: center;
            padding: 20px;
        }
        
        .container img{
            width: 170px;
            height: 170px;
            text-align: center;
        }

        .container h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }

        .container h2{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }
        
        .container a{
            display: 20px;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
        }
        
        .container a:hover{
            color: black;
            background: white;
        }

        .container p{
            color: white;
        }
    </style>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updatedoc.php" method="POST">
                             <h2 value="<?php echo $row['nombre_doc']  ?>">Editar Cliente</h2>
                    
                                <input type="hidden" name="id_doctor" value="<?php echo $row['id_doctor']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre_doc" placeholder="Nombre" value="<?php echo $row['nombre_doc']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_doc" placeholder="Apellido" value="<?php echo $row['apellido_doc']  ?>">
                                <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad" value="<?php echo $row['especialidad']  ?>">
                                <input type="text" class="form-control mb-3" name="correo_doc" placeholder="Correo" value="<?php echo $row['correo_doc']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono_doc" placeholder="Telefono" value="<?php echo $row['telefono_doc']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>