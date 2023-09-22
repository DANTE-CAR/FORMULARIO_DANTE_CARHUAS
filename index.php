<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="insertar.php" method="post">
        <table >
        <h1>FORMULARIO DE REGISTRO </h1>
        <h3>Registro de nuevo usuario:</h3>
        <P>⚡DANTE CARHUAS.COM ⚡</P>
            <tr>
                <td>NOMBRES</td><td><input type="text" name="nombre" id=""></td>
            </tr>
            <tr>
                <td>EMAIL</td><td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>CONTRASEÑA</td><td><input type="text" name="contraseña" id=""></td>
            </tr>
            <tr>
                <td>REPITA CONTRASEÑA</td><td><input type="text" name="contraseña2" id=""></td>
            </tr>
                <tr><td><br><input type="submit" value="REGISTRAR">
            </td>
    </div>
    <div>
        <table border = "1">
        <h3>REGISTRO DE FORMULARIO BASE DE DATOS phpMyAdmin</h3>
            <tr>
                <td>id</td>
                <td>NOMBRES</td>
                <td>CORREO ELECTROCINO </td>
                <td>CONTRASEÑA</td>
                <td>CONTRASEÑA REP.</td>
            </tr>    
            <?php
                $cnx = mysqli_connect("localhost:3307", "root","","formulario");
                $sql = "SELECT id, nombre, email, contraseña, contraseña2 FROM usuarios order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)){
             ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                </tr>
            <?php
            }
            ?>     
        </table>
</body>
</html>