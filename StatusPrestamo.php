<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Biblioteca Personal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>


</head>
<body id="top">
<?php
	session_start();
	if(!isset($_SESSION['k_username1'])){
		header("Location:index.php");
	}
?>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Biblioteca Personal</a></h1>

    </div>
    <div id="topnav">
      
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container2">
    <div class="homepage">
	<h1 class="espaciar3">Ingreso Alumno</h1>
	<br />
	
		<div id="content">
		
		<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=400,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
		
		<?php
		
//	session_start();
 $identif=$_REQUEST['prest'];
// echo strlen($identif2);
 $link = mysql_connect("localhost","root","");
// echo "<p>$identif</p>";
 mysql_select_db("biblioteca_personal",$link);
 $result = mysql_query("select * from libros where id_libro='$identif'",$link);
 
 $alu= $_SESSION['k_username1'];
 $result2 = mysql_query("select * from alumnos where id_alumno='$alu'",$link);
// echo "<table border=1>";
// echo "<tr style='font-weight:bold; color:blue;'><td>ID Libro</td><td>Titulo</td><td>Autor</td><td>A�o</td><td>Editorial</td><td>Genero</td><td>Num Paginas</td><td>Existentes</td></tr>";
//  echo "<p>$result</p>";

if(strlen($identif)<1){
	echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>Ingrese una b�squeda v�lida.<br><br><a href='Prestamos.php'; class='drop-shadow'>Regresar</a></p>";
				echo "<p><br><br><br><br><br><br><br><br></p>";
}

//else if ($row=mysql_fetch_array($result)==NULL){
else if ($row=mysql_fetch_array($result)==NULL){
// if($result==NULL){   
//	echo "<p>$row</p>";
   echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>El ID de libro ingresado no est� registrado en la base de datos.<br><br><a href='Prestamo.php'; class='drop-shadow'>Regresar</a></p>";
		
	echo "<p><br><br><br><br><br><br><br><br></p>";
//   echo "<a href='JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');'>Open a popup window</a>";
   
//   <a href="JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');">Open a popup window</a>
//   echo "<tr><td>$id</td><td>$ti</td><td>$aut</td><td>$an</td><td>$edi</td><td>$gen</td><td>$nump</td><td>$stat</td></tr>";
 //echo"</table>";
 }
 
 else
 {	
 	   $verificar= mysql_query("select * from libros where id_libro='$identif'",$link);
	   $contra= mysql_fetch_array($verificar);
	   $nomm= $contra['titulo'];
// 		echo "<p>Contrase�a ingresada: $identif2</p>";
		// 		echo "Contrase�a en la base: &nbsp";
	//	echo $contra['password'];
		
//		echo gettype($identif2);
	   if($contra['status']==0){
	   echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>Lo sentimos, no hay ejemplares disponibles del libro <strong>$nomm</strong>.<br><br><a href='Prestamos.php'; class='drop-shadow'>Regresar</a></p>";
		echo "<p><br><br><br><br><br><br><br><br></p>";
	   }
	   else{
	   	//echo $_SESSION['k_username1'];
	    $contra2= mysql_fetch_array($result2);
	    $numP= $contra2['Numprestamos'];
		//echo $numP;
		if($numP<3){
		
//		$row=mysql_fetch_array($result);
 	   	echo "<p class='espaciar2'>Operacion exitosa! El libro <strong>$nomm</strong> ha sido sacado en pr�stamo.<br><br>Redireccionando...</p>";
		echo "<p><br><br><br><br><br><br><br><br></p>";
		$nuevaCant= $contra['status'] - 1;
		mysql_query("update libros set status=$nuevaCant where id_libro='$identif'",$link);
		$numP= $numP+1;
		mysql_query("update alumnos set Numprestamos=$numP where id_alumno='$alu'",$link);
		
		//echo strlen($contra2['prestamo1']);
		//echo $identif;
		
		if(strlen($contra2['prestamo1'])==0){ 
		mysql_query("update alumnos set prestamo1='$identif' where id_alumno='$alu'",$link);
//		echo "Meter en prestamo1";
		}
		else if(strlen($contra2['prestamo2'])==0){ 
		mysql_query("update alumnos set prestamo2='$identif' where id_alumno='$alu'",$link);
	//			echo "Meter en prestamo2";
		}
		else if(strlen($contra2['prestamo3'])==0){ 
		mysql_query("update alumnos set prestamo3='$identif' where id_alumno='$alu'",$link);
		//		echo "Meter en prestamo3";
		}
		
//		$wtf=$contra['id_alumno'];
	//	echo "<p>$wtf</p>";
		//$_SESSION['k_username1']=$contra['id_alumno'];
	   	header('Refresh: 5; URL=Prestamos.php');
		//header("Location:indexA.php");
		}
		
		else{
			echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>El alumno cuenta con 3 libros prestados, no es posible pedir m�s libros en pr�stamo.<br><br><a href='Prestamos.php'; class='drop-shadow'>Regresar</a></p>";
		echo "<p><br><br><br><br><br><br><br><br></p>";
		}
		
	   }
	   
 }
 
 mysql_free_result($result);
 mysql_free_result($result2);
 mysql_close($link);
?>
	
  </div>
	
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      <h2>Acerca de nosotros</h2>
      <img class="imgl" src="images/AcercaDe2.jpg" alt="" />
      <p>Somos un grupo dedicado a facilitar el uso de bibliotecas digitales. Creamos p�ginas adaptadas a las necesidades 
			de cada biblioteca. Cont�ctenos si requiere de nuestros servicios.</p>

    </div>
    <div class="box contactdetails">
      <h2>Contacto</h2>
      <ul>
        <li>FCC Buap</li>
        <li>Avenida San Claudio &amp; 14 sur</li>
        <li>Puebla</li>
        <li>72570</li>
        <li>Tel: (222)2295500</li>
        <li><a href="http://www.cs.buap.mx/">www.cs.buap.mx</a></li>
      </ul>
    </div>
    <div class="box flickrbox">
      <!--<h2>Latest Flickr Images !</h2>
      <div class="wrap">
        <div class="fix"></div>
        <div class="flickr_badge_image" id="flickr_badge_image1"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image2"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image3"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image4"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image5"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image6"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="fix"></div>
      </div>-->
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - Todos los derechos reservados.</p>
    <p class="fl_right"></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>