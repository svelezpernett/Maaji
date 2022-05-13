<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT*FROM cliente";
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
    <title>Maaji DB</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col md-3" id="col1">
                <h1>Añadir cliente</h1><br>
                <form action="insertar.php" method="POST">
                    <input type="hidden" name="id">
                    <input type="text" name="nombre" placeholder="Nombre del cliente"><br><br>
                    <input type="text" name="apellido" placeholder="apellido del cliente"><br><br>
                    <input type="text" name="telefono" placeholder="telefono del cliente"><br><br>
                    <input type="text" name="correo" placeholder="email del cliente"><br><br>

                    <input type="submit" class="btn btn-light" value="Añadir">
                </form>
            </div>

            <div class="col md-8" id="tabla_clientes">
                <h1>Lista de clientes</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                                <tr>
                                    <th><?php echo $row['nombre'] ?></th>
                                    <th><?php echo $row['apellido'] ?></th>
                                    <th><?php echo $row['telefono'] ?></th>
                                    <th><?php echo $row['correo'] ?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                    <!-- Button trigger modal -->
                                    <th><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Eliminar
                                    </button>
                                    </th>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header" id="headerModal">
                                            <h5 class="modal-title" id="exampleModalLabel">Elimiar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Seguro que desea eliminar al cliente <?php echo $row['nombre']?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                                            <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </tr>
                            <?php
                            }
                            ?>

                        
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col mt-5">
                <img id="logoMaaji" src="https://cdn.shopify.com/s/files/1/0102/8875/8847/files/SOCIAL.jpg?v=1639589634" alt="">
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>