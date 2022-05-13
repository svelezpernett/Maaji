<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

    $sql="UPDATE cliente SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo' WHERE id='$id'";

    $query=mysqli_query($con, $sql);

    if($query){
        Header("Location: IU.php");
    }
?>