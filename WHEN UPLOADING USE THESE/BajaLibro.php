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
	if(!isset($_SESSION['k_username2'])){
		header("Location:index.php");
	}
?>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
<?php
	$link = mysql_connect("mysql6.000webhost.com","a5996766_hab","blazing12");
 	mysql_select_db("a5996766_bib",$link);
	$profe=$_SESSION['k_username2'];
	$result = mysql_query("select nombre_profesor from profesores where id_profesor='$profe'",$link);
	$row=mysql_fetch_array($result);
	$nomm= $row['nombre_profesor'];
	echo "&nbsp;Bienvenido,<br>"."&nbsp;"."<strong>".$nomm."</strong>";
	mysql_free_result($result);
	mysql_close($link);
?>
  <div id="header">
    <div id="logo">
      <h1><a href="indexP.php">Biblioteca Personal</a></h1>

    </div>
    <div id="topnav">
      <ul>
        <li><a href="Consultaprestamos.php">Consultar préstamos</a></li>
        <li><a href="Emiteprestamo.php">Emitir préstamo</a></li>
	    <li class="active"><a href="BajaLibro.php">Baja de libro</a></li>
	    <li><a href="AltaLibro.php">Alta de libro</a></li>
	    <li><a href="StatusLogoutP.php">Salir</a></li>
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
	<h1>Baja de libro</h1>
	<br />
		
		<div id="content4">
		
		<div id="newsletter3">
		
	  <p>Ingrese el ID del libro que desea dar de baja. Si no conoce el ID de su libro, puede consultarlos en la parte inferior.</p>
		<br />
		<form action="StatusBaja.php" method="post">
        <fieldset>
         <input type="text" name="baja" value=""  onfocus="this.value=''" /><br></br><br></br>
          <input type="submit" name="news_go" id="news_go" value="Dar de baja" />
        </fieldset>
		</form>
		</div>
		
		<div id="whiteback"></div>
		
			<!--	<div id="newsletter3" class="morespace">

      <p class="wtf">Puede buscar un libro por su ID, titulo o autor.<br><br><br></p>
		<br />
		<form action="PrestamosBusqueda.php" method="post">
        <fieldset>
         <input type="text" name="busq" value=""  onfocus="this.value=''" /><br></br><br></br>
          <input type="submit" name="news_go" id="news_go" value="Busqueda" />
        </fieldset>
		</form>

	    </div> -->
		
		</div>
		
		
		<div id="content3">
		
		<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=400,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
		
		<?php
		
 $link = mysql_connect("mysql6.000webhost.com","a5996766_hab","blazing12");
 mysql_select_db("a5996766_bib",$link);
 $profe=$_SESSION['k_username2'];
 $result2 = mysql_query("select nombre_profesor from profesores where id_profesor='$profe'",$link);
 $row=mysql_fetch_array($result2);
 $nomm= $row['nombre_profesor'];
 mysql_free_result($result2);
 
 
// $result = mysql_query("select * from libros where autor='$nomm'",$link);
 $result = mysql_query("select * from prestamos where id_profesor='$profe'",$link);
// echo "<table border=1>";
// echo "<tr style='font-weight:bold; color:blue;'><td>ID Libro</td><td>Titulo</td><td>Autor</td><td>Año</td><td>Editorial</td><td>Genero</td><td>Num Paginas</td><td>Existentes</td></tr>";
	echo "<h1>Libros del profesor: <strong>$nomm</strong></h1>";
 /*
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
   echo "<p><a href=javaScript:newPopup('Detalleslibro.php?a=$id'); class='drop-shadow'><img src=$img width='100' height='150' alt='' class='captionated' /></a> <strong>$id</strong><br>$ti<br>$aut</p>";
   
//   echo "<a href='JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');'>Open a popup window</a>";
   
//   <a href="JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');">Open a popup window</a>
//   echo "<tr><td>$id</td><td>$ti</td><td>$aut</td><td>$an</td><td>$edi</td><td>$gen</td><td>$nump</td><td>$stat</td></tr>";
   }
 //echo"</table>";
 mysql_free_result($result);
 mysql_close($link);
 */
 
 
 while ($row=mysql_fetch_array($result))
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
   }
   
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
   
   echo "<p><a href=javaScript:newPopup('Detalleslibro.php?a=$id'); class='drop-shadow'><img src=$img width='100' height='150' alt='' class='captionated' /></a> <strong>$id</strong><br>$ti<br>$aut</p>";
   
//   echo "<p class='espaciar2'><img src=$img width='100' height='150' alt='' class='captionated' /></p>
  // 
//   <p> <strong>ID:</strong><br>	<strong>Titulo:</strong><br>	<strong>Autor:</strong><br>	<strong>Año:</strong><br>	<strong>Editorial:</strong><br>	<strong>Genero:</strong><br>	<strong>Num. Paginas:</strong><br>	<strong>Status:</strong></p>
   
//   <p class='espaciar'>$id<br>	$ti<br>	$aut<br>	$an<br>	$edi<br>	$gen<br>	$nump<br>	$disp<br>	</p>";
   
//   echo "<a href='JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');'>Open a popup window</a>";
   
//   <a href="JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');">Open a popup window</a>
//   echo "<tr><td>$id</td><td>$ti</td><td>$aut</td><td>$an</td><td>$edi</td><td>$gen</td><td>$nump</td><td>$stat</td></tr>";
   }
  }
 //echo"</table>";
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
