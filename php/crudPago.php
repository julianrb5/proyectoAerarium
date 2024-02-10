<?php

include "conex.php";

//Insertar o Crear los Datos
if($_POST){

  //print_r ($_POST);
  $fechaPago = $_POST['fechaPago'];
  $fechaVencimiento = $_POST['fechaVencimiento'];
  $archivoEvidenciaPago = $_POST["archivoEvidenciaPago"];
  $proveedor_idProveedor = $_POST['proveedor'];
  $alerta = $_POST['alerta'];
  $usuario_idUsuario= $_POST['usuario'];
  $estadoPago = $_POST['estadoPago'];

  $stmt = $conn -> prepare ("INSERT INTO
  $tabla_db4 (idProgramacionPagos,fechaPago,fechaVencimiento,archivoEvidenciaPago,proveedor_idProveedor,alerta,usuario_idUsuario,estadoPago)
  VALUES (NULL,?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssss",$fechaPago, $fechaVencimiento,$archivoEvidenciaPago,$proveedor_idProveedor,$alerta, $usuario_idUsuario,$estadoPago);
  if (!$stmt) {
    echo "Error en la preparación de la declaración: " . $conn->error;
  }

  $stmt->execute();
  if (!$stmt->execute()) {
    echo "Error en la ejecución de la consulta: " . $stmt->error;
}
  echo "Se ha insertado un registro a la Base de Datos!.";
}
// -------------------------------------------------------

// Eliminar los datos
if($_GET){
  $idProgramacionPagos= $_GET['idProgramacionPagos'];
  $stmt = $conn -> prepare ("DELETE FROM $tabla_db4 WHERE idProgramacionPagos=?");
  $stmt->bind_param("s",$idProgramacionPagos);
  $stmt->execute();
}
//-------------------------------------

// Mostrar los datos   
$sql = "SELECT * FROM programacionpagos order By idProgramacionPagos desc";
$resultado = $conn->query($sql);
$datos = $resultado->fetch_all();
// ---------------------

// Consultar Datos

/*if(isset($_POST['btn_consultar'])){
  $resultados = mysqli_query($conex, "SELECT * FROM $tabla_db4 ");
  while ($consulta = mysqli_fetch_array($resultados)){

  }
}*/
if (isset($_POST['btnDescargar'])) {
  header("Location: reporteProgramacionPagos.php");
  exit();
}

?>
