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
	$link = mysql_connect("localhost","root","");
	mysql_select_db("biblioteca_personal",$link);
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
	    <li><a href="BajaLibro.php">Baja de libro</a></li>
	    <li class="active"><a href="AltaLibro.php">Alta de libro</a></li>
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
	<h1>Alta de nuevo libro</h1>
	<br /><br />
      <ul>
        <li>
          <!--<h2><img src="images/Catalogo2.jpg" alt="" />Catálogo de libros</h2>
          <p>Consulte todos los libros existentes en nuestra base de datos. Información detallada sobre cada ejemplar.</p>
          <p class="readmore"><a href="#">Catálogo &raquo;</a></p>
		  -->
		  <div id="newsletter3">
      <p>Ingrese los detalles del nuevo libro.</p>
      <form action="Statusregistrolibro.php" method="post" name="form1">
        <fieldset>
          <legend>NewsLetter</legend>
          <input type="text" name="titu" value="Titulo&hellip;"  onfocus="this.value=''" /><br></br>
		  <input type="text" name="aut" value="Autor&hellip;"  onfocus="this.value=''" /><br></br>
		  <input type="text" name="isbn" value="ISBN&hellip;"  onfocus="this.value=''" /><br></br>
          <input type="text" name="anio" value="Año&hellip;"  onfocus="this.value=''" /><br></br>
		  <input type="text" name="edit" value="Editorial&hellip;"  onfocus="this.value=''" /><br></br>
		  <input type="text" name="gene" value="Genero&hellip;"  onfocus="this.value=''" /><br></br>
		  <input type="number" name="nump" value="Numero de Paginas&hellip;"  onfocus="this.value=''" /><br></br>
		  <input type="url" name="imag" value="Imagen&hellip;(URL)"  onfocus="this.value=''" /><br></br><br></br>
          <input type="submit" name="news_go" id="news_go" value="Dar de alta" />
        </fieldset>
      </form>
	    </div>
		  
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
