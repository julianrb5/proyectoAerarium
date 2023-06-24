<?php

include "conex.php";

if($_POST){

  print_r ($_POST);
  $fechaPago = $_POST['fechaPago'];
  $fechaVencimiento = $_POST['fechaVencimiento'];
  $proveedor = $_POST['proveedor'];
  $alerta = $_POST['alerta'];
  $usuario= $_POST['usuario'];
  $estadoPago = $_POST['estadoPago'];

  $stmt = $conn -> prepare ("INSERT INTO
  programacionpagosOk (id,fechaPago,fechaVencimiento,proveedor_idProveedor,alerta,usuario_idUsuario,estadoPago)
  VALUES (NULL,?,?,?,?,?,?)");
  $stmt->bind_param("ssssss",$fechaPago, $fechaVencimiento,$proveedor,$alerta,$usuario,$estadoPago);
  $stmt->execute();
  echo "Se ha insertado un registro a la Base de Datos!.";
}
?>



<!-- include "conex.php";

if ($_POST) {

  print_r ($_POST);
  $fechaPago = $_POST['fechaPago'];
  $fechaVencimiento = $_POST['fechaVencimiento'];
  $proveedor = $_POST['proveedor'];
  $alerta = $_POST['alerta'];
  $usuario = $_POST['usuario'];
  $estadoPago = $_POST['estadoPago'];

  $stmt = $conex->prepare("INSERT INTO programacionpagos (id, fechaPago, fechaVencimiento, proveedor_idProveedor, alerta, usuario_idUsuario, estadoPago)
  VALUES (NULL, ?, ?, ?, ?, ?, ?)");

  $stmt->bind_param("ssssss", $fechaPago, $fechaVencimiento, $proveedor, $alerta, $usuario, $estadoPago);
  $stmt->execute();

  echo "Se ha insertado un registro en la base de datos.";
}
 -->
