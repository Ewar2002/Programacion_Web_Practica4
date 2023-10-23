<?php
require('fpdf.php'); // Asegúrate de que el archivo fpdf.php esté en el mismo directorio

// Configuración de la zona horaria
date_default_timezone_set('America/Caracas');

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Agregar título al PDF
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Reporte de Compras', 0, 1, 'C');

// Conectar a la base de datos (debes proporcionar tus propios datos de conexión)
$db = new mysqli('localhost:3306', 'root', '', 'bdd_edward');

// Verificar la conexión a la base de datos
if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}

// Consultar la base de datos para obtener los datos de las compras
$query = "SELECT botellonx_botellones.Cedula, botellonx_botellones.Cantidad, botellonx_botellones.Total_lts, botellonx_botellones.Fecha_Hora, botellonx_clientes.Nombre
FROM botellonx_botellones
LEFT JOIN botellonx_clientes ON botellonx_botellones.Cedula = botellonx_clientes.Cedula";

$result = $db->query($query);

// Configurar encabezados de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(35, 10, 'Nombre', 1, 0, 'C');
$pdf->Cell(35, 10, 'Cedula', 1, 0,'C');
$pdf->Cell(45, 10, 'Cantidad Botellones', 1,0,'C');
$pdf->Cell(35, 10, 'Litros Totales', 1, 0,'C');
$pdf->Cell(45, 10, 'Fecha y Hora', 1, 0,'C');
$pdf->Ln();

// Agregar los datos de las compras al PDF
$pdf->SetFont('Arial', '', 12);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(35, 10, $row['Nombre'], 1, 0, 'C');
    $pdf->Cell(35, 10, $row['Cedula'], 1,0,'C');
    $pdf->Cell(45, 10, $row['Cantidad']. " Botellones", 1,0,'C');
    $pdf->Cell(35, 10, $row['Total_lts']. " Lts", 1,0,'C');
    $pdf->Cell(45, 10, $row['Fecha_Hora'], 1,0,'C');
    $pdf->Ln();
}

// Cerrar la conexión a la base de datos
$db->close();

// Salida del PDF
$pdf->Output();
?>
