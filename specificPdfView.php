<?php
session_start();

$value = $_SESSION['number1'];

echo $value;

/*
$conn = @mysql_connect("localhost" , "root" , "");
$db = @mysql_select_db('cs',$conn);

$que = "select *from persons where id = '$value'";
$run = @mysql_query($que);
$i = 1;

require("PDF/fpdf.php");

$pdf=new FPDF();
$pdf->AddPage();
$pdf->setFont("Arial","B",22);

$pdf->SetTextColor(178,34,34);
 $pdf->Cell(0,10,"DHA SUFFA UNIVERSITY",0,0,'C');$pdf->Ln();
$pdf->setFont("Arial","B",10);
$pdf->SetTextColor(72,61,139);
 $pdf->Cell(0,10,"COMPUTER SCIENCE DEPARTMENT",0,0,'C');$pdf->Ln();
			$pdf->SetTextColor(229,0,0);
 $pdf->Cell(0,0,"STUDENT DATA",0,0,'C'); $pdf->Ln();$pdf->Ln();$pdf->Ln();
//$pdf->Cell(20,5,'Name','LTR',0,'C',0); $pdf->Ln();

//$pLn();

 $pdf->Ln();
 $pdf->Ln();
$i = 0;
$size = 15;
$pdf->SetFont('Arial','B',15);

$pdf->Ln();
$pdf->Ln();

$pdf->SetTextColor(178,34,34);
$pdf->SetFont('Arial','B',10);

	$name =
	$fname =
	$email =
	$number =
	$id =
	$year=	
	$springFall="";	



while($row=@mysql_fetch_array($run))
{
	$name = $row[0];
	$fname = $row[1];
		$number = $row[2];
	$email = $row[3];

	$id = $row[4];
	$year = $row[5];	
	$springFall = $row[7];	


	}


			$pdf->SetTextColor(229,0,0);
			$pdf->Rect(25, 40, 150, 10, 'D');
			$pdf->Cell(50,10,"");$pdf->Ln();
			$pdf->Cell(100,10,"Student Name : ",0,0,'C');
            $pdf->SetTextColor(72,61,139);
			$pdf->Cell(50,10,"{$name}",0,0,'C');
			$pdf->Ln();
			
			$pdf->Rect(25, 50, 150, 10, 'D');
						$pdf->SetTextColor(229,0,0);
			$pdf->Cell(100,10,"Father Name : ",0,0,'C');
						$pdf->SetTextColor(72,61,139);
            $pdf->Cell(50,10,"{$fname}",0,0,'C');
			$pdf->Ln();
			
			$pdf->Rect(25, 60, 150, 10, 'D');
			$pdf->SetTextColor(229,0,0);			
			$pdf->Cell(100,10,"Program : ",0,0,'C');
						$pdf->SetTextColor(72,61,139);
            $pdf->Cell(50,10,"Computer Science(BSCS)",0,0,'C');
			$pdf->Ln();
			
			
			$pdf->Rect(25, 70, 150, 10, 'D');
			$pdf->SetTextColor(229,0,0);			
			$pdf->Cell(100,10,"Email : ",0,0,'C');
						$pdf->SetTextColor(72,61,139);
            $pdf->Cell(50,10,"{$email}",0,0,'C');
			$pdf->Ln();
			
			$pdf->Rect(25, 80, 150, 10, 'D');
						$pdf->SetTextColor(229,0,0);
			$pdf->Cell(100,10,"Contact Number : ",0,0,'C');
						$pdf->SetTextColor(72,61,139);
            $pdf->Cell(50,10,"{$number}",0,0,'C');
			$pdf->Ln();

			$pdf->Rect(25, 90, 150, 10, 'D');
						$pdf->SetTextColor(229,0,0);

			$pdf->Cell(100,10,"LMS ID : ",0,0,'C');
						$pdf->SetTextColor(72,61,139);

            $pdf->Cell(50,10,"{$id}",0,0,'C');
			$pdf->Ln();
			
			
			
			$pdf->Rect(25, 100, 150, 10, 'D');	
						$pdf->SetTextColor(229,0,0);

			$pdf->Cell(100,10,"Admition Year : ",0,0,'C');
						$pdf->SetTextColor(72,61,139);

			$pdf->Cell(50,10,"{$year}",0,0,'C');
						$pdf->Ln();
 
			$pdf->Ln();
			
			
		
$pdf->Line(100,110,100,40);

$pdf->output();
*/
?>