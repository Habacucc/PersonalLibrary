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
	<h1 class="espaciar3">Cerrar Sesion</h1>
	<br />
	
		<div id="content">
		
		
		<?php
	echo "<p class='espaciar2'>Cerrando su sesion... <br><br>Redireccionando...</p>";
	echo "<p><br><br><br><br><br><br><br><br></p>";
//	session_start();
	session_destroy();
	header('Refresh: 3; URL=index.php');
//	header("Location:index.php");
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
