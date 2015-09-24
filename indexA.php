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
      <h1><a href="indexA.php">Biblioteca Personal</a></h1>

    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="indexA.php">Inicio</a></li>
        <li><a href="ConsultalibrosA.php">Consultar libros</a></li>
        <li><a href="BuscarLibroA.php">Buscar libros</a></li>
	    <li><a href="Prestamos.php">Prestamo de libros</a></li>
	    <li><a href="StatusLogoutA.php">Salir</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
	      <li><img src="images/Estudiante5.jpg" alt="Estudiante" />
          <div class="floater">
            <h2>Bienvenido alumno</h2>
            <p>Bienvenido alumno. Puede consultar, buscar o pedir libros prestados.<br><br><br></p>
          </div>
        </li>
        <li><img src="images/Libros.jpg" alt="Biblioteca" />
          <div class="floater">
            <h2>Biblioteca Personal</h2>
            <p>Bienvenido a Biblioteca Personal. Aquí encontrara los mejores libros en temas de ciencia. <strong>Regístrese</strong> para poder obtener
			libros en préstamo y leerlos desde la comodidad de su hogar. Si desea registrarse como profesor, contacte al administrador
			de la página.</p>

          </div>
        </li>
		<li><img src="images/AcercaDe.jpg" alt="" />
          <div class="floater">
            <h2>Acerca de nosotros</h2>
            <p>Somos un grupo dedicado a facilitar el uso de bibliotecas digitales. Creamos páginas adaptadas a las necesidades 
			de cada biblioteca. Contáctenos si requiere de nuestros servicios.<br><br></p>
            <p class="readmore"><a href="AcercaDe.php">Contacto &raquo;</a></p>
          </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div class="homepage">
      <ul>
        <li>
          <h2><img src="images/Catalogo2.jpg" alt="" />Catálogo de libros</h2>
          <p>Consulte todos los libros existentes en nuestra base de datos. Información detallada sobre cada ejemplar.</p>
          <p class="readmore"><a href="ConsultalibrosA.php">Catálogo &raquo;</a></p>
        </li>
        <li>
          <h2><img src="images/BuscarLibro.gif" alt="" />Búsqueda de libros</h2>
          <p>Busque algún libro en particular. Puede buscar por título del libro, por autor o por área cientifica. </p><br />
          <p class="readmore"><a href="BuscarLibroA.php">Buscar &raquo;</a></p>
        </li>
		<li class="last">
          <h2><img src="images/Prestamo.png" alt="" />Préstamo de libros</h2>
          <p>Pida un libro prestado. Necesitará el identificar del libro (<strong>ID</strong>).</p><br />
          <p class="readmore"><a href="Prestamos.php">Préstamo &raquo;</a></p>
        </li>
        
      </ul>
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
