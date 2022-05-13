<?php
//Funcion para conectar con la BD
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="maaji";

    $con=mysqli_connect($host, $user, $pass);

    mysqli_select_db($con, $bd);

    return $con;
}

?>