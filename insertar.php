<?php
include("conexion.php");
$con=conectar();

$idJugador=$_POST['idJugador'];
$fecha=$_POST['fecha'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$dinero=$_POST['dinero'];



$sql="INSERT INTO jugadores VALUES('$idJugador','$fecha','$nombre','$edad','$sexo','$dinero')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>