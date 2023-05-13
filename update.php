<?php

include("conexion.php");
$con=conectar();

$idJugador=$_POST['idJugador'];
$fecha=$_POST['fecha'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$dinero=$_POST['dinero'];

$sql="UPDATE jugadores SET fecha='$fecha',nombre='$nombre',edad='$edad',sexo='$sexo',dinero='$dinero' WHERE idJugador='$idJugador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>