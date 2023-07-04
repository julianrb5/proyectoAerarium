<?php

$servername = "localhost";
$username = "root";
$password = "";
$bd = "aerarium"; 

$tabla_db1 = "usuario";
$tabla_db2 = "rol";
$tabla_db3 = "proveedor";
$tabla_db4 = "programacionpagos";
$tabla_db5 = "pagosrealizados";
$tabla_db6 = "cargos";


$conn = mysqli_connect ($servername, $username,$password,$bd);

if(!$conn) {

    die("Error de conexión: ".mysqli_connect_error());
}




