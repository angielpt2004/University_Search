<?php 

$dbhost ="localhost";
$dbuser ="root";
$dbpass ="123456";
$dbname ="universitySearch";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname );
if (!$conn)
{
    die("No hay conexcion: " .mysqli_connect_error());
}

$nombre = $_POST["name"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)

{
    header("Location: ../Formulario_University/mostrarDatos.php");
}
else if ($nr == 0)

{
    echo"<script> alert('Usuario o contraseña incorrecta');window.location= 'login.html' </script>";
}

