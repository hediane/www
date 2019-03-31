<?php
require('fpdf.php');

include "crud/config.php";
//acceder lel base 
$sql="SELECT * FROM livraison";
$sql1="SELECT UCASE(`COLUMN_NAME`) FROM `INFORMATION_SCHEMA`.`COLUMNS`  WHERE `TABLE_SCHEMA`='projetweb' AND `TABLE_NAME`='livraison'";
$db = config::getConnexion();
//wahda lel l donnees
$result=$db->query($sql);
//hedhi lel l asemi mta3 les colonnes
$header=$db->query($sql1);
//bch yesna3 page pdf
$pdf = new FPDF('p','mm','A3');
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
//nkasro f ryousna f adress :3
$show = false;
$pos_adr = 0;
$count = 0;
foreach($header as $heading) {
    foreach($heading as $column_heading)
        if($show == true)
        {
            if($column_heading == "ADRESSE")//houni nchoufo ken il ism mta3 il colonne howa adresse 
            {
                $pdf->Cell(65,10,$column_heading,1); //ki yelkaha bch yemchy yzid 65? mech bech yzid 65 just bech yhotha fi plasa akber ey bch yhot adress taille te7a 65 ? ey il 3ordh mela fech nahkilk ena dakhltni f hit 
                $pos_adr = $count; //lehne ki count lka position mta adress? ey
            }
            else
            {
               $pdf->Cell(40,10,$column_heading,1); //sinn bch to93ed hakek ken malkach position te7a? honi chouf il if mte3na nlawjo 3al adresse il isem ma3neha ism il colonne ... ? kaml lehne ken malkahch esm colone adresse bch yet3ada mch bch yhot il haja ili hiya mahich adreese fi wahda taille mte3ha 40 mrigl 
            }
            $show = false;
            $count++; //yo93ed ychouf ahna win ( ya3ti il 3dad mta3 il colonne ili ahna fih )
        }
        else
        {
            $show = true;
        }
}

$show = false;
foreach($result as $row) {
    $pdf->Ln();
    $count = 0;
    foreach($row as $column)
        if($show == true)
        {
            if($count == $pos_adr)
            {
                $pdf->Cell(65,10,$column,1);
            }
            else
            {
               $pdf->Cell(40,10,$column,1); 
            }
            $show = false;
            $count++;
        }
        else
        {
            $show = true;
        }
}

$pdf->Output();
?>