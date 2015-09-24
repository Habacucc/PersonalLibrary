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
        <li><a href="Consultaprestamos.php">Consultar préstamos</a></li>
        <li><a href="Emiteprestamo.php">Emitir préstamo</a></li>
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
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
	      <li><img src="images/Profesor2.jpg" alt="Profesor" />
          <div class="floater">
            <h2>Bienvenido profesor</h2>
            <p>Bienvenido profesor. Puede consultar o buscar libros, emitir préstamos, dar de baja un libro o puede dar de alta nuevos libros. <br><br><br></p>
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
    <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev2.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next2.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div class="homepage">
      <ul>
		<li>
          <h2><img src="images/Inicio2b.png" alt="" width="60" height="60"/>Mis libros</h2>
          <p style="height:45px;">Consulte sus libros existentes en Biblioteca Personal.</p><br />
          <p class="readmore"><a href="MisLibros.php">Mis Libros &raquo;</a></p>
        </li>
        <li>
          <h2><img src="images/Catalogo2.jpg" alt="" />Catálogo de libros</h2>
          <p>Consulte todos los libros existentes en nuestra base de datos. Información detallada sobre cada ejemplar.</p>
          <p class="readmore"><a href="ConsultalibrosP.php">Catálogo &raquo;</a></p>
        </li>
        <li class="last">
          <h2><img src="images/BuscarLibro.gif" alt="" />Búsqueda de libros</h2>
          <p>Busque algún libro en particular. Puede buscar por título del libro, por autor o por área cientifica. </p>
          <p class="readmore"><a href="BuscarLibroP.php">Buscar &raquo;</a></p>
        </li>
		
<!--		<li class="last">
          <h2><img src="images/Alta.png" alt="" />Alta de nuevo libro</h2>
          <p>Dar de alta un nuevo libro. Necestiará proporcionar los datos del libro.</p><br />
          <p class="readmore"><a href="AltaLibro.php">Alta &raquo;</a></p>
        </li>	-->
        
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
