<!DOCTYPE>
<html>
	<body>
		<?php
			require("fpdf182/fpdf.php");
			
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->Image('Capture_logo.PNG',10,10,38,25);
			$pdf->Cell(38,25,'',1);
			$pdf->SetFont('Arial', '', 18);
			$pdf->Cell(150,25,utf8_decode('Rémunération en vacations - Formation Continue'),1,1,'C');
			$pdf->SetFont('Arial', 'B', 10);
			$pdf->Cell(190,8,'___________________________________________________________',1,1,'C');
			$pdf->Cell(30,8,utf8_decode('CADRE 1'),1,0); $pdf->Cell(40,8,utf8_decode('IDENTIFICATION'),1,1);
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(25,6,utf8_decode('N° NUMEN'),1,0); $pdf->Cell(100,6,'|_|_|_|_|_|_|_|_|_|_|_|_|_|',1,1);
			$pdf->Output("F", "./rem1.pdf");
		
		
		?>
	</body>

</html>