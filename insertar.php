<?php
    include("conexion.php");
    $con=conectar();

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

    $sql="INSERT INTO cliente VALUES('$id', '$nombre', '$apellido', '$telefono', '$correo')";
    $query=mysqli_query($con, $sql);

    if($query){
        Header("Location: IU.php");
    }
    else{

    }
?>