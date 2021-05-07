<?php 
include("conexion.php");
$con=conectar();

$sql="SELECT *  FROM mascota";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Mascota</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

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
        <div class="row"> 

            <div class="col-md-3">
                <h1><img src="image/icon.png"></h1>
                <form action="insertarmas.php" method="POST">
                    <input type="text" class="form-control mb-3" name="id_mascota" placeholder="Id">

                    <input type="text" class="form-control mb-3" name="id_usuario" placeholder="Id Cliente">
                    <input type="text" class="form-control mb-3" name="nombre_masco" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="tipo_mascota" placeholder="Tipo Mascota">
                    <input type="text" class="form-control mb-3" name="raza" placeholder="Raza">
                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered" >
                    <thead class="table table-danger" >
                        <tr>
                            <th class="text-white">ID</th>
                            <th class="text-white">ID Cliente</th>
                            <th class="text-white">Nombre</th>
                            <th class="text-white">Tipo Mascota</th>
                            <th class="text-white">Raza</th>
                            <th class="text-white">Color</th>
                            <th class="text-white"></th>
                            <th class="text-white"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <th class="text-white"><?php  echo $row['id_mascota']?></th>
                                <th class="text-white"><?php  echo $row['id_usuario']?></th>
                                <th class="text-white"><?php  echo $row['nombre_masco']?></th>
                                <th class="text-white"><?php  echo $row['tipo_mascota']?></th>
                                <th class="text-white"><?php  echo $row['raza']?></th>
                                <th class="text-white"><?php  echo $row['color']?></th>    
                                <th class="text-white"><a href="actualizarmas.php?idm=<?php echo $row['id_mascota'] ?>" class="btn btn-info">Editar</a></th>
                                <th class="text-white"><a href="deletemas.php?idm=<?php echo $row['id_mascota'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
                    
                </div>
            </div>
        </div> 
        <a class="btn btn-success" href="menu.php" role="button">Principal</a> 
    </div>
</body>
</html>