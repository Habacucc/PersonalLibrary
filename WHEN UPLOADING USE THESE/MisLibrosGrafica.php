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
<!--        <li class="active"><a href="indexP.php">Inicio</a></li>	-->
        <li><a href="Consultaprestamos.php">Consultar pr�stamos</a></li>
        <li><a href="Emiteprestamo.php">Emitir pr�stamo</a></li>
	    <li><a href="BajaLibro.php">Baja de libro</a></li>
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
  <div id="container2">
    <div class="homepage">
	<h1 class="espaciar3">Libros por profesor</h1>
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
		
// $identif=$_GET['a'];
 $link = mysql_connect("mysql6.000webhost.com","a5996766_hab","blazing12");
 mysql_select_db("a5996766_bib",$link);
// echo "<p>$identif</p>";
// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libros del profesor:&nbsp;&nbsp;"."<strong>".$_SESSION['k_username2']."</strong>";
 echo "<br><br><br>";
 
 	include "libchart/classes/libchart.php";
//	$chart2 = new VerticalBarChart(800,300);
	$chart2 = new HorizontalBarChart(800,300);
//	$chart2 = new PieChart(800,300);
	$chart2->getConfig()->setUseMultipleColor(true);
	
	function colore(){
return new Color(rand(0, 215), rand(0, 215), rand(0, 215));
}

	$chart2->getPlot()->getPalette()->setBarColor(array(
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore(),
		colore()
	));
	
	//$chart2->getPlot()->getPalette()->setBarColor(array(
		//new Color(255, 0, 0),
//		new Color(255, 255, 255),
	//			new Color(255, 125, 50),
		//						new Color(255, 125, 0),
//	));
	
	
	
	//$chart2 = new PieChart(800,300);
	//$chart2 = new LineChart(800,300);
	$dataset = new XYDataSet();

 
 
 $profe= $_SESSION['k_username2'];
 $result = mysql_query("select * from profesores",$link);
 $cantLibros= 0;
// echo "<table border=1>";
// echo "<tr style='font-weight:bold; color:blue;'><td>ID Libro</td><td>Titulo</td><td>Autor</td><td>A�o</td><td>Editorial</td><td>Genero</td><td>Num Paginas</td><td>Existentes</td></tr>";
 
 while ($row=mysql_fetch_array($result))
  {
   //$idL=$row['id_libro'];
   $idP=$row['id_profesor'];
   $nomm= $row['nombre_profesor'];
   //$stat2=$row['status'];
   //$prest=$row['prestado_a'];
   //if($stat2==0){
   //		$disp='No disponible';
  // }
   //else{
   	//	$disp='Disponible';
  // }
   
   $result2= mysql_query("select id_libro from prestamos where id_profesor='$idP'",$link);
   
   while ($row=mysql_fetch_array($result2))
  {
   $id=$row['id_libro'];
	$cantLibros= $cantLibros+1;
   
//   echo "<a href='JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');'>Open a popup window</a>";
   
//   <a href="JavaScript:newPopup('http://www.quackit.com/html/html_help.cfm');">Open a popup window</a>
//   echo "<tr><td>$id</td><td>$ti</td><td>$aut</td><td>$an</td><td>$edi</td><td>$gen</td><td>$nump</td><td>$stat</td></tr>";
   }
   $dataset->addPoint(new Point("$nomm", $cantLibros));
   $cantLibros=0;
   
  }
 //echo"</table>";
 
 $chart2->setDataSet($dataset);
	$chart2->getPlot()->setGraphPadding(new Padding(10,100,50,200));
	
	
	$chart2->setTitle("Libros por profesor");
	$chart2->render("generated/GraficaLibros.jpg");
	
	echo "<img src='generated/GraficaLibros.jpg' style='border 1px solid gray'/>";
	
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
