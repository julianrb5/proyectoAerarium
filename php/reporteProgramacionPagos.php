<?php
include_once "conex.php";
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet,IOFactory};


$resul= "SELECT idProgramacionPagos,
 fechaPago,
 fechaVencimiento,
 archivoEvidenciaPago, 
 proveedor_idProveedor, 
 alerta, 
 usuario_idUsuario,
 estadoPago FROM programacionpagos";

$consulta = $conn->query($resul);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActivesheet();
$hojaActiva->setTitle("Proveedores");

$hojaActiva->setCellValue('A1','ID');
$hojaActiva->setCellValue('B1','Fecha de pago');
$hojaActiva->setCellValue('C1','Fecha de vencimiento');
$hojaActiva->setCellValue('D1','Archivo evidencia pago');
$hojaActiva->setCellValue('E1','Proveedor');
$hojaActiva->setCellValue('F1','Alerta');
$hojaActiva->setCellValue('G1','Usuario');
$hojaActiva->setCellValue('H1','Estado de pago');


$fila = 2;

while ($rows = $consulta->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['idProgramacionPagos']);
    $hojaActiva->setCellValue('B'.$fila, $rows['fechaPago']);
    $hojaActiva->setCellValue('C'.$fila, $rows['fechaVencimiento']);
    $hojaActiva->setCellValue('D'.$fila, $rows['archivoEvidenciaPago']);
    $hojaActiva->setCellValue('E'.$fila, $rows['proveedor_idProveedor']);
    $hojaActiva->setCellValue('F'.$fila, $rows['alerta']);
    $hojaActiva->setCellValue('G'.$fila, $rows['usuario_idUsuario']);
    $hojaActiva->setCellValue('H'.$fila, $rows['estadoPago ']);
    $fila++;
}
ob_end_clean();
/* header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); */
header('Content-Type: application/octet-stream');

header('Content-Disposition: attachment;filename="ProgramaciónPagos.xlsx"');

header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
 exit;
 
?>
 <?php



?>