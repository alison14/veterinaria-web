<?php 
    include("conexion.php");
    $con=conectar();

$idm=$_GET['idm'];

$sql="SELECT * FROM mascota WHERE id_mascota='$idm'";
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
                    <form action="updatemas.php" method="POST">
                             <h2 value="<?php echo $row['nombre_masco']  ?>">Editar Mascota</h2>
                    
                                <input type="hidden" name="id_mascota" value="<?php echo $row['id_mascota']  ?>">
                                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre_masco" placeholder="Nombre" value="<?php echo $row['nombre_masco']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_mascota" placeholder="Tipo Mascota" value="<?php echo $row['tipo_mascota']  ?>">
                                <input type="text" class="form-control mb-3" name="raza" placeholder="Raza" value="<?php echo $row['raza']  ?>">
                                <input type="text" class="form-control mb-3" name="color" placeholder="Color" value="<?php echo $row['color']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>