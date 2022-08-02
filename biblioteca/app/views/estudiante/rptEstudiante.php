<?php

//Incluímos a la clase PDF_MC_Table

require_once  APPROOT . '\views\fpdf184\PDF_MC_Table_ok.php';


//Instanciamos la clase para generar el documento pdf
$pdf = new PDF_MC_Table();

//Agregamos la primera página al documento pdf
$pdf->AddPage();

//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;

//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 6,  SITENAME, 0, 1, 'C');
$pdf->Cell(100, 6, 'ESTUDIANTES', 0, 1, 'C');
$pdf->Ln(3);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(12, 6, 'id', 1, 0, 'C', 1);
$pdf->Cell(50, 6, utf8_decode('nombre'), 1, 0, 'C', 1);
$pdf->Cell(20, 6, utf8_decode('apellido1'), 1, 0, 'C', 1);
$pdf->Cell(20, 6, utf8_decode('apellido2'), 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'email', 1, 0, 'C', 1);
$pdf->Cell(35, 6, 'telefono', 1, 0, 'C', 1);
$pdf->Cell(35, 6, 'direccion', 1, 0, 'C', 1);

$pdf->Ln(10);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(12, 50, 20, 20, 20, 35, 35));

/* require_once('app/listarPacientes.php'); */

foreach ($data as $estudiante) {
    #$nombre = $reg->nombre;
    $identificacion = $estudiante->idUsuario;
    $nombre = $estudiante->nombre;
    $apellido1 = $estudiante->apellido1;
    $apellido2 = $estudiante->apellido2;
    $correo = $estudiante->correo;
    $telefono = $estudiante->telefono;
    $direccion = $estudiante->direccion;

    $pdf->SetFont('Arial', '', 10);
    $pdf->Row(array($identificacion, utf8_decode($nombre), utf8_decode($apellido1), utf8_decode($apellido2), $correo, $telefono, $direccion));
};

//Mostramos el documento pdf
$pdf->Output('I');
