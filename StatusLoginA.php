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
		
	session_start();
 $identif=$_REQUEST['matri'];
 $identif2=$_REQUEST['pass'];
// echo strlen($identif2);
 $link = mysql_connect("localhost","root","");
// echo "<p>$identif</p>";
 mysql_select_db("biblioteca_personal",$link);
 $result = mysql_query("select * from alumnos where id_alumno='$identif'",$link);
// echo "<table border=1>";
// echo "<tr style='font-weight:bold; color:blue;'><td>ID Libro</td><td>Titulo</td><td>Autor</td><td>Año</td><td>Editorial</td><td>Genero</td><td>Num Paginas</td><td>Existentes</td></tr>";
//  echo "<p>$result</p>";

if(strlen($identif)!=9){
	echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>La matricula ingresada no es válida. Debe contener 9 dígitos.<br><br><a href='LoginA.php'; class='drop-shadow'>Regresar</a></p>";
				echo "<p><br><br><br><br><br><br><br><br></p>";
}

else if(strlen($identif2)<1){
	echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>Ingrese una contraseña válida.<br><br><a href='LoginA.php'; class='drop-shadow'>Regresar</a></p>";
				echo "<p><br><br><br><br><br><br><br><br></p>";
}

//else if ($row=mysql_fetch_array($result)==NULL){
else if ($row=mysql_fetch_array($result)==NULL){
// if($result==NULL){   
//	echo "<p>$row</p>";
   echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>La matricula ingresada no está registrada en la base de datos.<br><br><a href='LoginA.php'; class='drop-shadow'>Regresar</a></p>";
		
	echo "<p><br><br><br><br><br><br><br><br></p>";
//   echo "<a href='JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');'>Open a popup window</a>";
   
//   <a href="JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');">Open a popup window</a>
//   echo "<tr><td>$id</td><td>$ti</td><td>$aut</td><td>$an</td><td>$edi</td><td>$gen</td><td>$nump</td><td>$stat</td></tr>";
 //echo"</table>";
 }
 
 else
 {	
 	   $verificar= mysql_query("select * from alumnos where id_alumno='$identif'",$link);
	   $contra= mysql_fetch_array($verificar);
// 		echo "<p>Contraseña ingresada: $identif2</p>";
		// 		echo "Contraseña en la base: &nbsp";
	//	echo $contra['password'];
		
//		echo gettype($identif2);
	   if($identif2!=$contra['password']){
	   echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>Contraseña incorrecta.<br><br><a href='LoginA.php'; class='drop-shadow'>Regresar</a></p>";
		echo "<p><br><br><br><br><br><br><br><br></p>";
	   }
	   else{
//		$row=mysql_fetch_array($result);
 	   	echo "<p class='espaciar2'>Ingreso exitoso! <br><br>Redireccionando...</p>";
		echo "<p><br><br><br><br><br><br><br><br></p>";
//		$wtf=$contra['id_alumno'];
	//	echo "<p>$wtf</p>";
		$_SESSION['k_username1']=$contra['id_alumno'];
	   	header('Refresh: 3; URL=indexA.php');
		//header("Location:indexA.php");
	   }
	   
 }
 
 mysql_free_result($result);
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
      <p>Somos un grupo dedicado a facilitar el uso de bibliotecas digitales. Creamos páginas adaptadas a las necesidades 
			de cada biblioteca. Contáctenos si requiere de nuestros servicios.</p>

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
