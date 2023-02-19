<?php

// Connect to the database
$host = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'database_name';
$conn = new mysqli($host, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the lead data from the database
$sql = "SELECT * FROM leads ORDER BY created_at DESC";
$result = $conn->query($sql);

// Generate the PDF file
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Lead Data');
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 10, 'ID');
$pdf->Cell(60, 10, 'Name');
$pdf->Cell(60, 10, 'Email');
$pdf->Cell(40, 10, 'Phone');
$pdf->Ln();
while ($row = $result->fetch_assoc()) {
   
