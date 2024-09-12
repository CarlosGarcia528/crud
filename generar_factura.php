<?php
require('fpdf/fpdf.php');

// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'sena');

// Obtener los datos de la factura desde la base de datos (ajusta la consulta según tu estructura de base de datos)
$id_factura = $_GET['id_factura']; // Supongamos que pasas el ID de la factura como parámetro
$sql = "SELECT * FROM productos WHERE id_factura = $id_factura";
$resultado = mysqli_query($conexion, $sql);

if ($fila = mysqli_fetch_assoc($resultado)) {
    // Crear un nuevo objeto PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->Image('./img/logoSena.png',10,10,-600);

    // Encabezado de la factura
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(190, 10, 'Factura', 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, 'Fecha: ' . date('Y-m-d'), 0, 1, 'C');
    $pdf->Ln(10);

    // Crear la tabla de la factura
    $pdf->SetXY(40, 40);
    $pdf->SetFillColor(78,142,55);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(60, 10, 'Producto', 1,0, 'C',true);
    $pdf->Cell(40, 10, 'Precio', 1,0, 'C',true);
    $pdf->Cell(40, 10, 'Cantidad', 1,0, 'C',true);
    $pdf->Ln();

    // Loop para agregar los productos de la factura
    $pdf->SetTextColor(0,0,0);
    do {
        $pdf->SetX(40);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(60, 10, $fila['productos'], 1);
        $pdf->Cell(40, 10, $fila['precio'], 1);
        $pdf->Cell(40, 10, $fila['cantidad'], 1);
        $pdf->Ln();
    } while ($fila = mysqli_fetch_assoc($resultado));

    // Salida del PDF
    $pdf->Output();
} else {
    echo 'No se encontraron datos para la factura especificada.';
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
