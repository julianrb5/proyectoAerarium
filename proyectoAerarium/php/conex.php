<?php

$servername = "localhost";
$username = "root";
$password = "";
$bd = "aerarium"; 

$tabla_db1 = "usuarios";
$tabla_db2 = "rol";
$tabla_db3 = "proveedores";
$tabla_db4 = "programacionpagos";
$tabla_db5 = "programacionpagos_has_notificaciones";
$tabla_db6 = "programacionpagos_has_etiqueta";
$tabla_db7 = "notificaciones";
$tabla_db8 = "etiqueta";
$tabla_db9 = "categoria";
$tabla_db10 = "cargo";

$conn = mysqli_connect ($servername, $username,$password,$bd);

if(!$conn) {

    die("Error de conexión: ".mysqli_connect_error());
}




