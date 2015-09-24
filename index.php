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

<!-- Style for Banner Maker Pro - Banner Rotator put in <HEAD> section -->
<style type="text/css">
.m_banner_hide{
	display:none;
}
.m_banner_show{
	display:block;
}
</style>
<!-- End Style for Banner Maker Pro - Banner Rotator put in <HEAD> section -->

<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="index.php">Biblioteca Personal</a></h1>

    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a href="Registrarse.php">Registrarse</a></li>
        <li><a href="LoginP.php">Ingreso profesores</a></li>
	    <li><a href="Consultalibros.php">Catálogo de libros</a></li>
	    <li><a href="AcercaDe.php">Acerca De</a></li>
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
        <li><img src="images/Libros.jpg" alt="Biblioteca" />
          <div class="floater">
            <h2>Biblioteca Personal</h2>
            <p>Bienvenido a Biblioteca Personal. Aquí encontrara los mejores libros en temas de ciencia. <strong>Regístrese</strong> para poder obtener
			libros en préstamo y leerlos desde la comodidad de su hogar. Si desea registrarse como profesor, contacte al administrador
			de la página.</p>
            <p class="readmore"><a href="Registrarse.php">Regístrese &raquo;</a></p>
          </div>
        </li>
        <li><img src="images/Profesor2.jpg" alt="Profesor" />
          <div class="floater">
            <h2>Ingresar como profesor</h2>
            <p>Ingreso a profesores. Administre sus libros e ingrese nuevos libros a su repertorio.<br><br><br></p>
            <p class="readmore"><a href="LoginP.php">Ingresar &raquo;</a></p>
          </div>
        </li>
        <li><img src="images/Catalogo.jpg" alt="Estudiante" />
          <div class="floater">
            <h2>Catálogo de libros</h2>
            <p>Consulte los libros existentes en Biblioteca Personal.<br><br><br></p>
            <p class="readmore"><a href="LoginP.php">Ingresar &raquo;</a></p>
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
          <h2><img src="images/Catalogo2.jpg" alt="" />Catálogo de libros</h2>
          <p>Consulte todos los libros existentes en nuestra base de datos. Información detallada sobre cada ejemplar.</p>
          <p class="readmore"><a href="Consultalibros.php">Catálogo &raquo;</a></p>
        </li>
        <li>
          <h2><img src="images/BuscarLibro.gif" alt="" />Búsqueda de libros</h2>
          <p>Busque algún libro en particular. Puede buscar por título del libro, por autor o por área cientifica. </p>
          <p class="readmore"><a href="Buscarlibro.php">Buscar &raquo;</a></p>
        </li>
        <li class="last">
          <h2><img src="images/Ingresar2.png" alt="" />Ingresar</h2>
          <p>Ingrese como usuario. Consulte, busque y pida libros prestados.</p><br />
          <p class="readmore"><a href="LoginP.php">Ingresar &raquo;</a></p>
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
	
	<div class="box contactdetails" style="margin-left:25px;">
	<h2 style="margin-left:50px;">Publicidad</h2>
	<p>&nbsp;&nbsp;</p>
	
	<h2 style="margin-left:50px; border-bottom:none;">
	<script language="javascript">
// Script for Banner Rotator by Banner Maker Pro - put in <BODY> section of HTML

// Banner Object
function Banner(objName)
   {
   this.obj = objName;
   this.aNodes = [];
   this.currentBanner = null;
   };

// Add Banner
Banner.prototype.add = function(BannerType, BannerLocation, BannerLength, H, W, AltText, URL) {
	this.aNodes[this.aNodes.length] = new Node(this.obj +"_"+ this.aNodes.length, BannerType, BannerLocation, BannerLength, H, W, AltText, URL);
    };

// Create Banner
function Node(Name, BannerType, BannerLocation, BannerLength, H, W, AltText, URL) {
 this.Name = Name;
 this.BannerType = BannerType;
 this.BannerLocation= BannerLocation;
 this.BannerLength = BannerLength;
 this.H = H
 this.W = W;
 this.AltText = AltText;
 this.URL = URL;
};

// Creates the HTML and places it on webpage
Banner.prototype.toString = function() {
 var str = ""
 for (var iCtr=0; iCtr < this.aNodes.length; iCtr++){
   str = str + '<span name="'+this.aNodes[iCtr].Name+'" '
   str = str + 'id="'+this.aNodes[iCtr].Name+'" ';
   str = str + 'class="m_banner_hide" ';
   str = str + 'align="center" ';
   str = str + 'valign="top" >\n';
   if (this.aNodes[iCtr].URL != ""){
     str = str + '<a href="'+this.aNodes[iCtr].URL+'" ';
     str = str + 'target="_blank"';
     str = str + '>';
 	}

   if ( this.aNodes[iCtr].BannerType == "FLASH" ){
     str = str + '<OBJECT '
     str = str + 'classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" '
     str = str + 'codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" '
     str = str + 'HEIGHT="'+this.aNodes[iCtr].H+'" ';
     str = str + 'WIDTH="'+this.aNodes[iCtr].W+'"';
     str = str + 'target="_blank"';
     str = str + 'id="bnr_'+this.aNodes[iCtr].Name+'" '
     str = str + 'ALIGN="" '
     str = str + 'VIEWASTEXT>'
     str = str + '<PARAM NAME=movie VALUE="'+ this.aNodes[iCtr].BannerLocation + '">'
     str = str + '<PARAM NAME=quality VALUE=high>'
     str = str + '<PARAM NAME=bgcolor VALUE=#FFFCDA>'
     str = str + '<EMBED ';
     str = str + 'src="'+this.aNodes[iCtr].BannerLocation+'" '
     str = str + 'quality=high '
     str = str + 'HEIGHT="'+this.aNodes[iCtr].H+'" ';
     str = str + 'WIDTH="'+this.aNodes[iCtr].W+'"';
     str = str + 'NAME="bnr_'+this.aNodes[iCtr].Name+'" '
     str = str + 'ALIGN="center" '
     str = str + 'TYPE="application/x-shockwave-flash" '
     str = str + 'PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">'
     str = str + '</EMBED>'
     str = str + '</OBJECT>'
   }else if ( this.aNodes[iCtr].BannerType == "IMAGE" ){
     str = str + '<img src="'+this.aNodes[iCtr].BannerLocation+'" ';
     str = str + 'border="0" ';
     str = str + 'height="'+this.aNodes[iCtr].H+'" ';
     str = str + 'width="'+this.aNodes[iCtr].W+'"';
     str = str + 'alt="'+this.aNodes[iCtr].AltText+'">';
}

   if (this.aNodes[iCtr].hyperlink != ""){
   	str = str + '</a>';
   }

   str += '</span>';
   }
   return str;
};
// Start the Banner Rotator
Banner.prototype.start = function()
{
  this.changeBanner();
  var thisBannerObj = this.obj;
  setTimeout(thisBannerObj+".start()", this.aNodes[this.currentBanner].BannerLength * 1000);
}
// Swap Banners
Banner.prototype.changeBanner = function()
{
  if (this.currentBanner == null)
    this.currentBanner= this.currentBanner=Math.round((this.aNodes.length-1)*Math.random());

  var oldBanner=this.currentBanner;

  do{
    this.currentBanner=Math.floor((this.aNodes.length)*Math.random())
    }
    while(this.currentBanner==oldBanner)
	if (document.getElementById(this.aNodes[oldBanner].Name).className=='m_banner_show')
	{
	document.getElementById(this.aNodes[oldBanner].Name).className = "m_banner_hide";
	}
	document.getElementById(this.aNodes[this.currentBanner].Name).className = "m_banner_show";
    }
</script>
<script language="javascript">
//<!--Banner Rotator-->
  banner1 = new Banner('banner1');
  banner1.add("IMAGE", "images/banner/BUAP.jpg", 4,60,200, "BUAP", "http://www.buap.mx/");
  banner1.add("IMAGE", "images/banner/UNAM.gif", 4,60,200, "UNAM", "http://www.unam.mx");
  banner1.add("IMAGE", "images/banner/CONACYT.jpg", 4,60,200, "CONACYT", "http://www.conacyt.mx");
  banner1.add("IMAGE", "images/banner/PORRUA.jpg", 4,60,200, "Libreria Porrua", "https://www.porrua.mx/");
  banner1.add("IMAGE", "images/banner/GHANDI.png", 4,60,200, "Libreria Ghandi", "http://www.gandhi.com.mx/");
  document.write(banner1);
  banner1.start();
</script>
<!-- The following line is only needed once in the html after the last </OBJECT> -->
<script type="text/javascript" src="iefix.js"></script>
<!-- End Banner Maker Pro Rotation-->
</h2>

	
	</div>
	
    <div class="box contactdetails">
      <h2 style="margin-left:50px">Contacto</h2>
      <ul style="margin-left:50px">
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
