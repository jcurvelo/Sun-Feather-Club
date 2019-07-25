<?php

require('conection.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$desc = $_POST['desc'];
$confirm_code = crypt($nombre.$edad,'st');
$sql = "INSERT INTO registro(nombre, apellido, correo, edad, descripcion,confirm_code) 
VALUES ('$nombre','$apellido','$correo','$edad','$desc','$confirm_code')";

if($conn->query($sql)===TRUE){
    header('Location: index.html');
}else{
    echo "Error ". $sql . "<br>" . $conn->error;
}
$conn->close();