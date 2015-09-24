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
      <h1><a href="#">Biblioteca Personal</a></h1>

    </div>
    <div id="topnav">
      <ul>
        <li><a href="Consultaprestamos.php">Consultar préstamos</a></li>
        <li class="active"><a href="Emiteprestamo.php">Emitir préstamo</a></li>
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
	<h1 class="espaciar3">Baja de libro</h1>
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
 $identif=$_REQUEST['id_libro'];
 $identif2=$_REQUEST['matri'];
// echo strlen($identif2);
 $link = mysql_connect("localhost","root","");
// echo "<p>$identif</p>";
 mysql_select_db("biblioteca_personal",$link);
// $result = mysql_query("select * from libros where id_libro='$identif'",$link);
 
 //$alu= $_SESSION['k_username1'];
 //$result2 = mysql_query("select * from alumnos where id_alumno='$alu'",$link);
// echo "<table border=1>";
// echo "<tr style='font-weight:bold; color:blue;'><td>ID Libro</td><td>Titulo</td><td>Autor</td><td>Año</td><td>Editorial</td><td>Genero</td><td>Num Paginas</td><td>Existentes</td></tr>";
//  echo "<p>$result</p>";

if(strlen($identif)<1){
	echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>Ingrese un ID de libro.<br><br><a href='Emiteprestamo.php'; class='drop-shadow'>Regresar</a></p>";
}

else if(strlen($identif2)!=9){
	echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>Ingrese una matricula de alumno válida (9 dígitos).<br><br><a href='Emiteprestamo.php'; class='drop-shadow'>Regresar</a></p>";
}

 
 else
 {		
 //	$link = mysql_connect("localhost","root","");
//	mysql_select_db("biblioteca_personal",$link);
   	$profe=$_SESSION['k_username2'];
	$result = mysql_query("select nombre_profesor from profesores where id_profesor='$profe'",$link);
	$result2 = mysql_query("select id_libro from prestamos where id_profesor='$profe'",$link);
	$row=mysql_fetch_array($result);
	$found=0;
	$nomm= $row['nombre_profesor'];
	 mysql_free_result($result);
//	echo "&nbsp;Bienvenido,<br>"."&nbsp;"."<strong>".$nomm."</strong>";
	
	while($row2=mysql_fetch_array($result2)){
		if($row2['id_libro']==$identif){
			$found=1;
		}
	}
	mysql_free_result($result2);
	
	if($found==0){
		echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>ID de libro no registrado para este profesor.<br><br><a href='Emiteprestamo.php'; class='drop-shadow'>Regresar</a></p>";
	}
	
	else{
		
	   $result3= mysql_query("select status from prestamos where id_libro='$identif' AND id_profesor='$profe'",$link);
	   $row3= mysql_fetch_array($result3);
	   $statt= $row3['status'];
	
	   if($statt==0){
	   	echo "<p class='espaciar2'><strong>ERROR:</strong></p>
		<p class='espaciar2'>El libro especificado no esta disponible para préstamo.<br><br><a href='Emiteprestamo.php'; class='drop-shadow'>Regresar</a></p>";
	   }
	   
	   else{
 	//   mysql_query("insert into libros values('$idL', '$titu', '$nomm', '$anio', '$edit', '$gene', '$nump', 1, '$imag')",$link);
	   mysql_query("update prestamos set status=0 where id_libro='$identif'",$link);
	   mysql_query("update prestamos set prestado_a='$identif2' where id_libro='$identif'",$link);
//	   mysql_query("delete from prestamos where id_libro='$identif' AND id_profesor='$profe'",$link);
 	   echo "<p class='espaciar2'>Prestamo exitoso!<br>El libro fue prestado al alumno <strong>$identif2</strong>
			<br><br><a href='Emiteprestamo.php'; class='drop-shadow'>Regresar</a></p>";
			}
		}
	   
 }
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
