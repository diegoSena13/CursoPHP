<?php


//Inlcuímos a la clase PDF_MC_Table
require('fpdf184/PDF_MC_Table.php');

//Instanciamos la clase para generar el documento pdf
$pdf = new PDF_MC_Table();

//Agregamos la primera página al documento pdf
$pdf->AddPage();

//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;

//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(40, 6, '', 0, 0, 'C');
$pdf->Cell(100, 6, 'Reporte de Pacientes', 1, 0, 'C');
$pdf->Ln(10);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(58, 6, 'Nombre', 1, 0, 'C', 1);
$pdf->Cell(50, 6, utf8_decode('Apellido'), 1, 0, 'C', 1);
$pdf->Cell(30, 6, utf8_decode('Telefono'), 1, 0, 'C', 1);
$pdf->Cell(12, 6, 'Email', 1, 0, 'C', 1);
$pdf->Cell(35, 6, 'Eps', 1, 0, 'C', 1);

$pdf->Ln(10);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(58, 50, 30, 12, 35));

require_once('app/listarPacientes.php');

foreach ($pacientes as $paciente) {
    #$nombre = $reg->nombre;
    $nombre = $paciente->nombrePaciente;
    $apellido = $paciente->apellidoPaciente;
    $telefono = $paciente->telPaciente;
    $email = $paciente->emailPaciente;
    $eps = $paciente->epsPaciente;
    $pdf->SetFont('Arial', '', 10);
    $pdf->Row(array($nombre, $apellido, $telefono, $email, $eps));
};

//Mostramos el documento pdf
$pdf->Output('D');