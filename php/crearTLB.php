<?php

include_once "conex.php";

$sql ="CREATE TABLE Proveedor (Nit int (20), NombreEmpresa varchar (30),  Email varchar (30),
 PersonaContacto varchar (30), NúmeroContacto int (20), Dirección varchar(30), Ciudad varchar(20), Docs LONGBLOB)"; //cambia según tarea 

if (mysqli_query($conn, $sql)) {
    echo " TABLA creada";
} else {
    echo" Error en la base de datos, no se creo..! ";
}



