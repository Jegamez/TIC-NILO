<?php
include("connection.php");
$con = connection();

$id = $_POST['id_Cedula'];
$name = $_POST['nombres'];
$lastname= $_POST['apellidos'];
$email = $_POST['correo'];

$sql = "INSERT INTO usuario VALUES('$id','$name','$lastname','$email')";
$query =mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");

};

?>