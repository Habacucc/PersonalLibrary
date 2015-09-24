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

<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=400,width=1000,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>

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
      <ul>
        <li><a href="indexA.php">Inicio</a></li>
        <li><a href="ConsultalibrosA.php">Consultar libros</a></li>
        <li class="active"><a href="BuscarLibroA.php">Buscar Libros</a></li>
	    <li><a href="Prestamos.php">Prestamo de libros</a></li>
	    <li><a href="StatusLogoutA.php">Salir</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div class="homepage">
	<h1>Búsqueda de libros</h1>
	<br />
		
		<div id="content2">
		
		<div id="newsletter2">
      <p>Puede buscar un libro por su titulo o autor.</p>
		<br />
		<form action="ResultadoBusquedaA.php" method="post">
        <fieldset>
         <input type="text" name="busq" value=""  onfocus="this.value=''" /><br></br><br></br>
          <input type="submit" name="news_go" id="news_go" value="Busqueda" />
        </fieldset>
		</form>

	    </div>
		
		<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=400,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
		
		<?php
		
 $identif=$_REQUEST['busq'];
// echo strlen($identif2);
 $link = mysql_connect("localhost","root","");
//	echo "<p>$identif</p>";
 mysql_select_db("biblioteca_personal",$link);
$result = mysql_query("select * from libros where titulo REGEXP '($identif){1,}' OR autor REGEXP '($identif){1,}'",$link);

// $result = mysql_query("select * from libros where titulo REGEXP '$identif' OR id_libro REGEXP '$identif' OR autor REGEXP '$identif'",$link);
 
  while ($row=mysql_fetch_array($result))
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
   echo "<p><a href=javaScript:newPopup('Detalleslibro.php?a=$id'); class='drop-shadow'><img src=$img width='100' height='150' alt='' class='captionated' /></a> $ti<br>$aut</p>";
   
//   echo "<a href='JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');'>Open a popup window</a>";
   
//   <a href="JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');">Open a popup window</a>
//   echo "<tr><td>$id</td><td>$ti</td><td>$aut</td><td>$an</td><td>$edi</td><td>$gen</td><td>$nump</td><td>$stat</td></tr>";
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
