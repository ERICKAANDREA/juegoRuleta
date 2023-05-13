<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM jugadores WHERE idJugador='$id'";
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
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idJugador" value="<?php echo $row['idJugador']  ?>">

                                <label for="fecha"> Fecha: </label>
                                <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']  ?>">

                                <label for="nombre"> Nombre: </label>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">

                                <label for="edad"> Edad: </label>
                                <input type="number" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sexo: </label>
                                    <select name="sexo" class="form-control mb-3" id="inlineFormCustomSelectPref">
                                        <option selected>Elegir...</option>
                                        <option value="1">Mujer</option>
                                        <option value="2">Hombre</option>
                                    </select>
                        
                                <label for="dinero"> Dinero: </label>    
                                <input type="text" class="form-control mb-3" name="dinero" placeholder="Dinero" value="<?php echo $row['dinero']  ?>">


                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>