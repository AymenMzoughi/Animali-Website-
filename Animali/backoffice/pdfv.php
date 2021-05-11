<?php
    
    require("fpdf/fpdf.php");
    $db=new PDO('mysql:host=localhost;dbname=animali', 'root', '');  
    
    class myPDF extends FPDF
    {
    	
    	function header()
    	{
    		$this->SetFont("Arial","B",14);
            $this->Cell(10,10,"animali",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des conseils:",'C');
            $this->ln();
    	}
    	function headertable()
    	{
    		$this->SetFont('Times','B',12);
    		
    		$this->Cell(40,10,'idc',1,0,'C');
    		$this->Cell(40,10,'idv',1,0,'C');
    		$this->Cell(40,10,'description',1,0,'C');
    		$this->ln();
    	}
    	function viewsTable($db)
    	{ 
    		$this->SetFont('times','',12);
    		$stmt = $db->query("SElECT * From conseils");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
    		    $this->Cell(40,10,$data->idc,1,0,'C');
    		    $this->Cell(40,10,$data->idv,1,0,'L');
    		    $this->Cell(40,10,$data->description,1,0,'L');
    		 
    		    $this->ln();
            }

    	}
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("liste_des_conseils.pdf", "D");


?>