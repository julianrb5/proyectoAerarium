<?php

include_once "conex.php";

//cambia según tarea
$sql ="CREATE TABLE programacionpagosOk (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fechaPago DATE NOT NULL,
    fechaVencimiento DATE NOT NULL,
    proveedor_idProveedor INT NOT NULL,
    alerta VARCHAR(100),
    usuario_idUsuario INT NOT NULL,
    estadoPago ENUM('Pendiente','Pagado','Vencido') NOT NULL
    );";

if (mysqli_query($conn, $sql)) {
    echo " TABLA creada";
} else {
    echo" Error en la base de datos, no se creo..! ".$conn->error;
}
?>
