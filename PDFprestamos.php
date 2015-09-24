<?php

   require('fpdf16/fpdf.php');
   $profe=$_GET['a'];
//   $id=$_GET['b'];

   #echo $mod;
   $pdf=new FPDF();	
   $pdf->AddPage();	//Agregar una pagina
   $pdf->SetFont('Arial','B',12);	//Letra Arial, negrita (Bold), tam. 20
   $pdf->Image('images/LogoPDF.jpg',20,10,70);
     
   $link = mysql_connect("localhost","root","");
   mysql_select_db("biblioteca_personal",$link);
 
// $profe=$_SESSION['k_username2'];
	$result = mysql_query("select nombre_profesor from profesores where id_profesor='$profe'",$link);
	$row=mysql_fetch_array($result);
	$nomm= $row['nombre_profesor'];
//	echo "&nbsp;Bienvenido,<br>"."&nbsp;"."<strong>".$nomm."</strong>";
	mysql_free_result($result);
 
// echo "<p>$identif</p>";
// $pdf->Ln();

 $pdf->Cell(0,55,'        Libros prestados del profesor:     '.$nomm,0,0);
// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libros del profesor:&nbsp;&nbsp;"."<strong>".$nomm."</strong>";
 //echo "<br><br><br>";
// $pdf->Ln();
// $profe= $_SESSION['k_username2'];
 $result = mysql_query("select * from prestamos where id_profesor='$profe'",$link);
// echo "<table border=1>";
// echo "<tr style='font-weight:bold; color:blue;'><td>ID Libro</td><td>Titulo</td><td>Autor</td><td>Año</td><td>Editorial</td><td>Genero</td><td>Num Paginas</td><td>Existentes</td></tr>";
 
/* while ($row=mysql_fetch_array($result))
  {
   $idL=$row['id_libro'];
   $idP=$row['id_profesor'];
   $stat2=$row['status'];
   $prest=$row['prestado_a'];
   if($stat2==0){
   		$disp='No disponible';
   }
   else{
   		$disp='Disponible';
   }*/
   
   $result4= mysql_query("select id_libro from prestamos where status=0 AND id_profesor='$profe'");
   
   
   $espaciadoH= 0;
   $espaciadoV= 1;
//   $pdf->Cell(80,15,'        Factura',0,1); 
   
   while($row4=mysql_fetch_array($result4))
   {
   $pdf->Ln();
   $idL= $row4['id_libro'];
   $result2= mysql_query("select * from libros where id_libro='$idL'",$link);
   
   while ($row=mysql_fetch_array($result2))
  {
   $id=$row['id_libro'];
   $ti=$row['titulo'];
   $aut=$row['autor'];
   $an=$row['anio'];
   $edi=$row['editorial'];
   $gen=$row['genero'];
   $nump=$row['numero_paginas'];
   $stat=$row['status'];
   $img=$row['imagen'];
   
   $result3= mysql_query("select prestado_a from prestamos where id_libro='$id' AND status=0 AND id_profesor='$profe'");
   $row3= mysql_fetch_array($result3);
   $prestt= $row3['prestado_a']; 
//   $pdf->Cell(80,15,$mar.'      '.$mod.'        '.$pre.'           '.$tot.'      '.$iva,0,1);
   $pdf->Image($img,15,$espaciadoV*66-$espaciadoH,35);
   
    $pdf->Cell(100,12,'                                                        ID:',0,0);
	$pdf->Cell(0,12,$id,0,1);
	
	$pdf->Cell(100,12,'                                                        Titulo:',0,0);
	$pdf->Cell(0,12,$ti,0,1);
	
	$pdf->Cell(100,12,'                                                        Autor:',0,0);
	$pdf->Cell(0,12,$aut,0,1);
	
	$pdf->Cell(100,12,'                                                        Prestado a:',0,0);
	$pdf->Cell(0,12,$prestt,0,1);
	
//	$pdf->Ln();
	$pdf->Cell(0,6,'',0,1);
	$pdf->Cell(0,0,'',1,1);
	$pdf->Cell(0,6,'',0,0);
	
   
//   $pdf->Ln();
//   $pdf->Ln();
  // $pdf->Ln();
//   $pdf->Ln();
   
//   echo "<p class='espaciar2'><img src=$img width='100' height='150' alt='' class='captionated' /></p>
   
  // <p> <strong>ID:</strong><br>	<strong>Titulo:</strong><br>	<strong>Autor:</strong><br><strong>Prestado a:</strong></p>
   
   //<p class='espaciar'>$id<br>	$ti<br>	$aut<br> <strong>$prestt</strong> <br><br><br><br><br>		</p>";
   
//   echo "<a href='JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');'>Open a popup window</a>";
   
//   <a href="JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');">Open a popup window</a>
//   echo "<tr><td>$id</td><td>$ti</td><td>$aut</td><td>$an</td><td>$edi</td><td>$gen</td><td>$nump</td><td>$stat</td></tr>";
  // }
   }
   $espaciadoV= $espaciadoV+1;
   $espaciadoH= $espaciadoH+6;
       mysql_free_result($result2);
    mysql_free_result($result3);
  }
 //echo"</table>";
 mysql_free_result($result);
 mysql_free_result($result4);
 mysql_close($link);
  $pdf->Ln();
    $pdf->Ln();
  $pdf->Write(5,'Consulte información detallada sobre sus libros en:     ','');
  $pdf->SetTextColor(0,0,255);
  $pdf->SetFont('','U'); 
  $pdf->Write(5,'Biblioteca Personal','http://localhost/BibliotecaPersonal2/indexP.php');
  $pdf->Output();
  //mysql_free_result($result); 
//  mysql_close($link);
?>
