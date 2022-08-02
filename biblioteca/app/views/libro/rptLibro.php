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
$pdf->Cell(100, 6, 'LIBROS', 0, 1, 'C');
$pdf->Ln(3);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(12, 6, 'id', 1, 0, 'C', 1);
$pdf->Cell(50, 6, utf8_decode('titulo'), 1, 0, 'C', 1);
$pdf->Cell(50, 6, utf8_decode('autor'), 1, 0, 'C', 1);
$pdf->Cell(50, 6, utf8_decode('categoria'), 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'editorial', 1, 0, 'C', 1);

$pdf->Ln(10);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(12, 50, 50, 50, 20));

/* require_once('app/listarPacientes.php'); */

foreach ($data as $libro) {
    #$nombre = $reg->nombre;
    $id = $libro->id;
    $titulo = $libro->titulo;
    $autor = $libro->autor;
    $categoria = $libro->categoria;
    $editoral = $libro->editorial;

    $pdf->SetFont('Arial', '', 10);
    $pdf->Row(array($id, utf8_decode($titulo), utf8_decode($autor), utf8_decode($categoria), $editoral));
};

//Mostramos el documento pdf
$pdf->Output('I');
