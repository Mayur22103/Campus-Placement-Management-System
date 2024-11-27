<?php
require("./fpdf/fpdf.php");
class PDF extends FPDF
{
    /* Page header */
    function Header()
    {
        $this->SetLeftMargin(18);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(50, 10, 'CPMS');
        $this->Ln(7);


    }
    /* Page footer */
    function Footer()
    {
        /* Position at 1.5 cm from bottom */
        $this->SetY(-15);
        /* Arial italic 8 */
        $this->SetFont('Arial', 'I', 8);
        /* Page number */
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

session_start();
$id = $_SESSION['fid'];
$conn1 = new mysqli("localhost", "root", "", "minor_project");
$query1 = "SELECT faculty.f_name from faculty where f_id=$id ";
$record1 = $conn1->query($query1);
$row1 = $record1->fetch_array();
$dt = date("d/m/Y");

/* Instanciation of inherited class */
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(13, 10, 'Name : ');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, $row1['f_name']);
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 10, 'Print Date : ');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, $dt);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(40);
$pdf->Cell(100, 10, 'All Selected Student List', 1, 0, 'C');
$pdf->Ln(20);
$pdf->SetFont('Times', '', 12);
$pdf->SetFillColor(193, 229, 252);
$pdf->Cell(20, 10, 'No', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'student name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Degree Name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Company name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Job Title', 1, 1, 'C', true);
$count = 0;
$conn = new mysqli("localhost", "root", "", "minor_project");
$query = "SELECT company.c_name,company.c_id,jobdetails.userid,jobdetails.j_title,jobdetails.skill,jobdetails.j_type,student.s_name,student.s_id,student.s_degname,student.selected_status,apply.status FROM jobdetails INNER JOIN company  ON jobdetails.userid=company.c_id INNER JOIN student ON student.s_degname=jobdetails.j_type  INNER JOIN apply ON apply.jobdetail_id=jobdetails.j_id WHERE apply.status=2  AND apply.student_id=student.s_id";
$record = $conn->query($query);
while (($row = $record->fetch_array()) == true) {
    $pdf->Cell(20, 10, ++$count, 1, 0, 'C');
    $pdf->Cell(40, 10, $row['s_name'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['s_degname'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['c_name'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['j_title'], 1, 1, 'C');
}
$pdf->Output();

?>