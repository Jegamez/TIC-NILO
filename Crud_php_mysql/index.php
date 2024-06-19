<?php

include('connection.php');

$con = connection();

$sql =  "SELECT * FROM usuario";
$query =mysqli_query($con, $sql);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="">
            <h1>Crear Usuario</h1>
            <input type="text" id="id_Cedula" placeholder="Cedula">
            <input type="text" name="nombres" placeholder="Nombres">
            <input type="text" lastname="apellidos" placeholder="Apellidos">
            <input type="text" email="correo" placeholder="Correo">

            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

      <div>
       <h2>Usuarios Registrados</h2>
      <table>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th></th>
                <th></th>
            </tr>
        </thead>


        <tbody>
            <?php while($row =mysqli_fetch_array($query)): ?>
            <tr>

                <th> <?= $row['id_Cedula'] ?> </th>
                <th> <?= $row['nombres'] ?></th>
                <th> <?= $row['apellidos'] ?></th>
                <th> <?= $row['correo'] ?></th>
    
                <th><a href="">Editar</a></th>
                <th><a href="">Eliminar</a></th>
            </tr>

            <?php endwhile; ?>

        </tbody>
      </table>
      </div>

</body>
</html>