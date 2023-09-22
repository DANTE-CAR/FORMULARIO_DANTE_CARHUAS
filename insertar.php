<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$contraseña2 = $_POST['contraseña2'];
$cnx = mysqli_connect("localhost:3307", "root","","formulario");
$sql = "INSERT INTO usuarios (id, nombre, email, contraseña, contraseña2) VALUES ('$id','$nombre', '$email', '$contraseña', '$contraseña2')";
$rta = mysqli_query($cnx, $sql);
if (!$rta){
    echo "no se inserto!";
}
else{
    header ("Location: index.php");
}

?>