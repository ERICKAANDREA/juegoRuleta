<?php

include("conexion.php");
$con=conectar();

$idJugador=$_GET['id'];

$sql="DELETE FROM jugadores  WHERE idJugador='$idJugador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
