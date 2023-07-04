<?php
include_once "conex.php";
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet,IOFactory};


$resul= "SELECT idUsuario,
 tipoDocumentoUsuario
 documentoUsuario,
 nombresUsuario, 
 apellidosUsuario, 
 telefonoUsuario, 
 correoUsuario,
 passwordUsuario,
 estadoUsuario, 
 rol_idRol, 
 cargos_idCargo FROM usuario";

$consulta = $conn->query($resul);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActivesheet();
$hojaActiva->setTitle("Usuarios");

$hojaActiva->setCellValue('A1','ID');
$hojaActiva->setCellValue('B1','Tipo documento');
$hojaActiva->setCellValue('C1','N° documento');
$hojaActiva->setCellValue('D1','Nombres');
$hojaActiva->setCellValue('E1','Apellidos');
$hojaActiva->setCellValue('F1','Teléfono');
$hojaActiva->setCellValue('G1','Correoelectrónico');
$hojaActiva->setCellValue('H1','Contraseña');
$hojaActiva->setCellValue('I1','Estado');
$hojaActiva->setCellValue('J1','Rol');
$hojaActiva->setCellValue('K1','Cargo');

$fila = 2;

while ($rows = $consulta->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['idUsuario']);
    $hojaActiva->setCellValue('B'.$fila, $rows['tipoDocumentoUsuario']);
    $hojaActiva->setCellValue('C'.$fila, $rows['documentoUsuario']);
    $hojaActiva->setCellValue('D'.$fila, $rows['nombresUsuario']);
    $hojaActiva->setCellValue('E'.$fila, $rows['apellidosUsuario']);
    $hojaActiva->setCellValue('F'.$fila, $rows['telefonoUsuario']);
    $hojaActiva->setCellValue('G'.$fila, $rows['correoUsuario']);
    $hojaActiva->setCellValue('H'.$fila, $rows['passwordUsuario']);
    $hojaActiva->setCellValue('I'.$fila, $rows['estadoUsuario']);
    $hojaActiva->setCellValue('J'.$fila, $rows['rol_idRol']);
    $hojaActiva->setCellValue('K'.$fila, $rows['cargos_idCargo']);
    $fila++;
}
ob_end_clean();
/* header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); */
header('Content-Type: application/octet-stream');

header('Content-Disposition: attachment;filename="usuarios.xlsx"');

header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
 exit;
 
?>
 <?php



?>