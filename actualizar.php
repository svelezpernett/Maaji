<?php
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT*FROM cliente WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap" rel="stylesheet">
    <title>Actualizar informacion</title>
</head>
<body>
    <div class="container mt-5 d-flex">
        <div class="row">
            <div class="col p-2">
                <form action="update.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img src="https://integralatampost.s3.amazonaws.com/uploads/article/picture/13797/20190130_Maaji_-los-bikinis-colombianos-que-conquistan-la-moda-internacional.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Editar informacion</h5>
                            <p class="card-text">A continuacion podra ingresar la informacion nueva para actualizar al cliente seleccionado</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><input type="hidden" name="id" value="<?php echo $row['id']?>"></li>
                            <li class="list-group-item"><input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']?>"></li>
                            <li class="list-group-item"><input type="text" name="apellido" placeholder="apellido" value="<?php echo $row['apellido']?>"></li>
                            <li class="list-group-item"><input type="text" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']?>"></li>
                            <li class="list-group-item"><input type="text" name="correo" placeholder="correo" value="<?php echo $row['correo']?>"></li>
                        </ul>
                        <div class="card-body">
                            <input type="submit" value="Actualizar">
                            <a href="IU.php" class="card-link">Regresar</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col p-2 flex-grow-1">
                <img id="imgEditar" src="https://i.insider.com/5e67e09ae4f9fe74524f60a7?width=700" alt="">
            </div>
            
        </div>
        
    </div>   
</body>
</html>