<!DOCTYPE>
<html>
	<head>
		<style>
			a {
				border: 4px groove #1c87c9;
			}
		</style>
	</head>
	<body>
		<?php
			require("fpdf182/fpdf.php");
			
			$show_border = 1;
			$with_color = false;
			
			$pdf = new FPDF();
			
			$pdf->AddPage();
			
			$pdf->SetFillColor(200,191,231);
			$pdf->SetFont('Arial', 'B', 14);
			$pdf->Cell(190,8,htmlspecialchars($_POST['initiales']),0,1,'R');
			$pdf->Image('Capture_logo.PNG',10,10,38,25);
			$pdf->Cell(38,17,'',0);
			$pdf->SetFont('Arial', '', 18);
			$pdf->Cell(150,17,utf8_decode('Rémunération en vacations - Formation Continue'),0,1,'C');
			$pdf->SetFont('Arial', 'B', 10);
			$pdf->Cell(190,5,'___________________________________________________________',0,1,'C');
			$pdf->Cell(30,8,utf8_decode('CADRE 1'),0,0); 
			$pdf->Cell(40,8,utf8_decode('IDENTIFICATION'),0,1);
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(20,6,utf8_decode('N° NUMEN'),$show_border,0,'',true); 
			$pdf->Cell(65,6,'| _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ |',$show_border,0);
			$pdf->Cell(20,6,utf8_decode('N° INSEE'),$show_border,0,'',true); 
			$pdf->Cell(85,6,'| _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ | _ |',$show_border,1);
			$pdf->Cell(40,6,utf8_decode("M. [_] - Mme [_]"),$show_border,0);
			$pdf->Cell(10,6,'Nom',$show_border,0,'',true);
			$pdf->Cell(60,6,htmlspecialchars($_POST['nom']),$show_border,0,'R');
			$pdf->Cell(20,6,utf8_decode('Prénom'),$show_border,0,'',true);
			$pdf->Cell(60,6,htmlspecialchars($_POST['prenom']),$show_border,1,'R');
			$pdf->Cell(30,6,'Nom de jeune fille',$show_border,0,'',true);
			$pdf->Cell(40,6);
			$pdf->Cell(30,6,'Date de naissance',$show_border,0,'',true);
			$pdf->Cell(30,6,'_ _/_ _/_ _ _ _',$show_border,0,'C');
			$pdf->Cell(21,6,utf8_decode('Nationalité'),$show_border,0,'',true);
			$pdf->Cell(39,6,'',$show_border,1);
			$pdf->Cell(40,6,'Commune de naissance',$show_border);
			$pdf->Cell(70,6,'',$show_border);
			$pdf->Cell(35,6,'Pays de naissance',$show_border);
			$pdf->Cell(45,6,'',$show_border,1);
			$pdf->Cell(33,6,'Adresse personnelle',$show_border);
			$pdf->Cell(157,6,'',$show_border,1);
			//
			$pdf->Cell(22,6,'Code postal',$show_border);
			$pdf->Cell(23,6,'| _ | _ | _ | _ | _ |',$show_border);
			$pdf->Cell(22,6,'Commune',$show_border);
			$pdf->Cell(38,6,'',1);
			$pdf->Cell(40,6,utf8_decode('Pays de résidence'),1);
			$pdf->Cell(45,6,'',1,1);
			//
			$pdf->SetFont('Arial','B',10);		
			$pdf->Cell(190,5,'___________________________________________________________',0,1,'C');
			$pdf->Cell(30,8,utf8_decode('CADRE 2'),0,0); 
			$pdf->Cell(40,8,utf8_decode('PROFESSION'),0,1);
			//
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(190,5,'__________________________________________________',0,1,'C');
			$pdf->Cell(190,6,utf8_decode("[_] Personnel exerçant au sein de l'éducation nationale"),0,1);
			$pdf->Cell(50,6,utf8_decode("Établissement d'exercice"),1,0,'',true);
			$pdf->Cell(140,6,'',1,1);
			$pdf->Cell(15,6,'Statut',1,0,'',true);
			$pdf->Cell(175,6,utf8_decode('Titulaire [_] - Contractuel(le) [_] - Vacataire [_] - Autre (à préciser):'),1,1);
			//
			$pdf->Cell(190,5,'__________________________________________________',0,1,'C');
			$pdf->Cell(190,6,utf8_decode("[_] Personnel exerçant au sein d'une autre fonction publique"),0,1);
			$pdf->Cell(50,6,utf8_decode("Adresse employeur"),1,0,'',true);
			$pdf->Cell(140,6,'',1,1);
			$pdf->Cell(15,6,'Statut',1,0,'',true);
			$pdf->Cell(175,6,utf8_decode('Titulaire [_] - Contractuel(le) [_] - Vacataire [_] - Autre (à préciser):'),1,1);
			//
			$pdf->Cell(190,5,'__________________________________________________',0,1,'C');
			$pdf->Cell(190,6,utf8_decode("[_] Personnel exerçant hors fonction publique"),0,1);
			$pdf->Cell(30,6,utf8_decode("Employeur"),1,0,'',true);
			$pdf->Cell(160,6,'',1,1);
			$pdf->Cell(30,6,utf8_decode("Adresse"),1,0,'',true);
			$pdf->Cell(160,6,'',1,1);
			$pdf->Cell(190,6,utf8_decode("Profession libérale [_] - Chef d'entreprise [_] - Artisan [_] - Salarié(e) [_] - Intermittent(e) du spectacle [_]"),1,1);
			$pdf->Cell(190,6,utf8_decode("Retraité(e) (<=65 ans) [_] - Retraité(e) (>65 ans) [_] - Autre (à préciser):"),1,1);
			//
			$pdf->SetFont('Arial','B',10);		
			$pdf->Cell(190,5,'___________________________________________________________',0,1,'C');
			$pdf->Cell(30,8,utf8_decode('CADRE 3'),0,0); 
			$pdf->Cell(40,8,utf8_decode('DISPOSITIF DE FORMATION'),0,1);
			//
			$pdf->SetFont('Arial','',10);
			$pdf->Cell(25,6,utf8_decode("N° Dispositif"),1,0,"",true);
			$pdf->Cell(25,6,htmlspecialchars($_POST['dispositif']),1,0);
			$pdf->Cell(25,6,utf8_decode("N° Module"),1,0,"",true);
			$pdf->Cell(25,6,htmlspecialchars($_POST['module']),1,0);
			
			$pdf->Output("I","REM_".htmlspecialchars($_POST['date_debut_session'])."_".htmlspecialchars($_POST['nom']).".pdf",false);
			//$pdf->Output("F", "REM_".htmlspecialchars($_POST['date_debut_session'])."_".htmlspecialchars($_POST['nom']).".pdf");


		?>
		<a href="index.html">Retour</a>
	</body>
</html>