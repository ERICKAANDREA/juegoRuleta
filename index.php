<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM jugadores";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> JUGADORES RULETA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body> 
            <div class="container mt-5"> <!--Esta clase, separa los bordes de arriba, abajo y los lados-->
                    <div class="row"> <!-- Esta clase, divide la página en 2 partes-->
                        
                        <div class="col-md-3"> <!--Esta clase me dice el ancho de 3, de la primera parte-->
                            <h1 id="color_titulo">Ingrese datos del Jugador</h1>
                
                                <form action="insertar.php" method="POST">

                                    <!--<label for="idJugador"> Id Jugador: </label>
                                    <input type="number" class="form-control mb-3" name="idJugador" placeholder="">-->

                                    <label for="fecha"> Fecha: </label>
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="" required>

                                    <label for="nombre"> Nombre: </label>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="" required>

                                    <label for="edad"> Edad: </label>
                                    <input type="number" class="form-control mb-3" name="edad" placeholder="" required>

                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref" required>Sexo: </label>
                                    <select name="sexo" class="form-control mb-3" id="inlineFormCustomSelectPref">
                                        <option selected>Elegir...</option>
                                        <option value="1">Mujer</option>
                                        <option value="2">Hombre</option>
                                    </select>

                                    <label for="dinero"> Apuesta: </label>
                                    <input type="number" class="form-control mb-3" name="dinero" placeholder="" required>


                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8"> <!--Esta clase me dice el ancho de 8, de la segunda parte-->
                            <table class="table">
                                <thead class="table-dark" >
                                    <tr>
                                        <th>Id Jugador</th>
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Dinero</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idJugador']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><?php  echo $row['dinero']?></th>    


                                                <th><a href="actualizar.php?id=<?php echo $row['idJugador'] ?>" class="btn btn-success">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idJugador'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <br>
                    <div class="col-md-3">
                        <h1 id="color_titulo">INICIO DEL JUEGO</h1>
                        <p>TU SALDO ES DE: <span></span>💲💰</p>
                        <form action="" method="POST">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref" required>Escoge el color de apuesta: </label>
                                <select name="sexo" class="form-control mb-3" id="inlineFormCustomSelectPref">
                                    <option selected>Elegir...</option>
                                    <option value="1">Verde 🟢</option>
                                    <option value="2">Rojo 🔴</option>
                                    <option value="3">Negro ⚫</option>
                                </select>
                        </form>
                        <P>El color de la Ruleta es: </P>
                        <?php
                            include('juego.php')
                        ?>
                        
                    </div> 
            </div>
            
    </body>
</html>