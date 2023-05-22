<?php

header("Content-type: application/json");
require('../doc/assets/fpdf/fpdf/fpdf.php');
// include 'pdo_db.php';


// $getID = $_GET['id'];
// $data=array();
// $array_data =array();

     
			
//      $query = "SELECT  invoces_items.invoice,
//      invoces_items.prodact,invoice_costomer.name,invoice_costomer.phone ,invoice_costomer.adress  ,invoces_items.qty ,invoces_items.price,invoces_items.discount,invoces_items.subtotal
     
//      FROM invoces_items
//      INNER JOIN invoice_costomer ON invoice_costomer.invoice=invoces_items.invoice
//      WHERE invoces_items.invoice ='$getID' "
// 												;

//         $results = $conn->query($query);
//         if( $results){

//             while($data= $results->fetch_assoc()){
//                 $array_data []=$data;
//                $id= $data["invoice"];
//                $Name= $data["name"];
//                $phone= $data["phone"];
//                $adress= $data["adress"];
//                $product= $data["prodact"];
//                $qty= $data["qty"];
//                $price= $data["price"];
//                $discount= $data["discount"];
//                $subtotal= $data["subtotal"];
       

//         }
//     }

    // $path = 'images/'.$image;
// $idd=$_GET['id'];
// $select=$conn->prepare("SELECT * FROM `empoloye` WHERE ID_Employe='$id'");
// $select->execute();

// $row=$select->fetch(mysqli::fetch_OBJ);
// $select=$pdo->prepare("SELECT `saleID`, `company`, `name`, `saleComapny`, `sendSale`,`saleComapny`+ `sendSale` blance, `note`, `dateOFsale` FROM `deen` where saleID='$idd'");
// $select->execute();
// $row=$select->fetch(PDO::FETCH_OBJ);

$pdf = new  FPDF('p','mm','A5');
//add new
$pdf->Addpage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(60,10,'',0,0,'');
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(345,132,202);
// $pdf->Cell(192,10,'Mashruuc deyn ah lagudaayo ',1,1,'C',true);
$pdf->Cell(60,0,'',0,0,'');
// $pdf->Image('../images/lloga.jpeg',0,0,40,30);
$pdf->Cell(72,0,'invoice: #CID2817 ',0,1);
// //$pdf->SetFillColor(123,255,232);
// // $pdf->SetFont('Arial','B',16);
// // $pdf->Cell(60,10,'Mareye software',0,0,'');

$pdf->SetFont('Arial','',10);
$pdf->Cell(60,40,'',0,0,'');
$pdf->Cell(42,10,'Taarikhda : 12/1/2021 ',0,1,'');




//melbanan
$pdf->SetFont('Arial','',20);
 $pdf->Cell(70,30,'Name : Mascuud abdirahmaan',0,1,'');



 $pdf->SetFont('Arial','B',12);
 $pdf->Cell(20,7,'no',1,0,'');
 $pdf->Cell(50,7,'descraption',1,0,'');
 $pdf->Cell(20,7,'Qty',1,0,'');
 $pdf->Cell(20,7,'U. price',1,0,'');
 $pdf->Cell(20,7,'Amount',1,1,'');
 $pdf->SetFont('Arial','',12);
 $pdf->Cell(20,7,'1',1,0,'');
 $pdf->Cell(50,7,'steli',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'2',1,0,'');
 $pdf->Cell(50,7,'jingad',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'3',1,0,'');
 $pdf->Cell(50,7,'alwaax',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'4',1,0,'');
 $pdf->Cell(50,7,'busmaar',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');




 $pdf->Cell(20,7,'1',1,0,'');
 $pdf->Cell(50,7,'steli',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'2',1,0,'');
 $pdf->Cell(50,7,'jingad',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'3',1,0,'');
 $pdf->Cell(50,7,'alwaax',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');


 $pdf->Cell(20,7,'1',1,0,'');
 $pdf->Cell(50,7,'steli',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'2',1,0,'');
 $pdf->Cell(50,7,'jingad',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'3',1,0,'');
 $pdf->Cell(50,7,'alwaax',1,0,'');
 $pdf->Cell(20,7,'45',1,0,'');
 $pdf->Cell(20,7,'7',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');


 
 // lasta step
 $pdf->Cell(20,7,'',0,0,'');
 $pdf->Cell(50,7,'',0,0,'');
 $pdf->Cell(20,7,'',0,0,'');
 $pdf->Cell(20,7,'Total',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'',0,0,'');
 $pdf->Cell(50,7,'',0,0,'');
 $pdf->Cell(20,7,'',0,0,'');
 $pdf->Cell(20,7,'paid',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');
 $pdf->Cell(20,7,'',0,0,'');
 $pdf->Cell(50,7,'',0,0,'');
 $pdf->Cell(20,7,'',0,0,'');
 $pdf->Cell(20,7,'Reesto',1,0,'');
 $pdf->Cell(20,7,'1200',1,1,'');


$pdf->Cell(40,12,' ',0,1,'');
//melbanan
// $pdf->Cell(70,0,'  ',0,0,'');
$pdf->Cell(40,0,'Signe ______________',0,1,'');


$pdf->Cell(10,25,'FG:fadlan iska hubi Alaabta Inta Aadan Qaadanin Ka Hor  ',0,0,'D');
$pdf->Line(5,280,200,280);









//outbut
$pdf->Output();






?>

