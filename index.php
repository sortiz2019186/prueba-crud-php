<?php
    incloude('connection.php');

    $con = connection();

    $sql = "SELECT * FROM users";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD EN PHP Y MYSQL</title>
</head>
<body>
    <h1>CREAR USUARIO</h1>
    <div>
        <form action="">
            <input type="text" name="name" placeholer="Ingresa tu nombre">
            <input type="text" name="lastname" placeholer="Ingresa tu apellido">
            <input type="text" name="username" placeholer="Ingresa tu usuario">
            <input type="text" name="address" placeholer="Ingresa tu dirección">
            <input type="text" name="email" placeholer="Ingresa tu correo electrónico">

            <input type="submit" value="Agregar usuario">
        </form>
    </div>

    <div>
        <h2>USUARIOS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Dirección</th>
                    <th>Correo electrónico</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row[idUsuario] ?> </th>
                    <th> <?= $row[name] ?> </th>
                    <th> <?= $row[lastname] ?> </th>
                    <th> <?= $row[username] ?> </th>
                    <th> <?= $row[address] ?> </th>
                    <th> <?= $row[email] ?> </th>
    
                    <th><a href="">Editar</a></th>
                    <th><a href="">Eliminar</a></th>
                </tr>
                <?php endWhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>