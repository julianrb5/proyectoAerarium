<?php
include_once "conex.php";
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet,IOFactory};


$resul= "SELECT idProveedor,
 tipoDocumentoProveedor,
 documentoProveedor,
 nombresProveedor, 
 apellidosProveedor, 
 telefonoProveedor, 
 correoProveedor,
 passwordProveedor,
 estadoProveedor FROM proveedor";

$consulta = $conn->query($resul);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActivesheet();
$hojaActiva->setTitle("Proveedores");

$hojaActiva->setCellValue('A1','ID');
$hojaActiva->setCellValue('B1','Tipo documento');
$hojaActiva->setCellValue('C1','N° documento');
$hojaActiva->setCellValue('D1','Nombres');
$hojaActiva->setCellValue('E1','Apellidos');
$hojaActiva->setCellValue('F1','Teléfono');
$hojaActiva->setCellValue('G1','Correo Electrónico');
$hojaActiva->setCellValue('H1','Contraseña');
$hojaActiva->setCellValue('I1','Estado');


$fila = 2;

while ($rows = $consulta->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['idProveedor']);
    $hojaActiva->setCellValue('B'.$fila, $rows['tipoDocumentoProveedor']);
    $hojaActiva->setCellValue('C'.$fila, $rows['documentoProveedor']);
    $hojaActiva->setCellValue('D'.$fila, $rows['nombresProveedor']);
    $hojaActiva->setCellValue('E'.$fila, $rows['apellidosProveedor']);
    $hojaActiva->setCellValue('F'.$fila, $rows['telefonoProveedor']);
    $hojaActiva->setCellValue('G'.$fila, $rows['correoProveedor']);
    $hojaActiva->setCellValue('H'.$fila, $rows['passwordProveedor']);
    $hojaActiva->setCellValue('I'.$fila, $rows['estadoProveedor']);
    $fila++;
}
ob_end_clean();
/* header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); */
header('Content-Type: application/octet-stream');

header('Content-Disposition: attachment;filename="Proveedores.xlsx"');

header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
 exit;
 
?>
 <?php



?>