<?php

include_once "conex.php";

$sql = "CREATE DATABASE Aerarium"; //cambia según tarea 

if(mysqli_query($conn,$sql)) {
    echo "Base datos creada";
} else {
    echo"Error en la base de datos, no se creo..! ";
}



?>