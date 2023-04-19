    <!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Mediservis - Bienvenidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
    
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgHFtnsrFTuldLsl3BR2TADCzCRRLlx0Q"></script>
	<script>
			var myCenter=new google.maps.LatLng(4.435559, -75.215145);

			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };

			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker=new google.maps.Marker({
			  position:myCenter,
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Allura" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
	<script src="email/validation.js" type="text/javascript"></script>
</head>

    <style>
    .span12 {
    }

    #divMenuLeft {
        margin-top: 30px;
    }
    #divMenuLeft > div {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body id="pageBody">

    <div id="decorative2">
        <div class="container">

            <div class="divPanel topArea notop nobottom">
                <div class="row-fluid">
                    <div class="span12">

                        <div id="divMenuLeft" class="span3">
                            <div class="navbar">
                                <!-- <img style="max-width:60%;" src="Logos/mediservislogo.png"> -->
                                <img style="max-width:60%;" src="./imagenes_nuevas/monograma-mediservis.jpg">
                        </div>
                    </div>

                    <div id="divMenuRight" class="span9">
                            <div class="navbar">
                            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
									NAVIGATION <span class="icon-chevron-down icon-white"></span>
								</button>
                                <div class="nav-collapse collapse">
                                    <ul class="nav nav-pills ddmenu">
                                        <li class="dropdown"><a href="home.html">Inicio</a></li>
                                        <li class="dropdown"><a href="empresa.html">Empresa</a></li>
                                        <li class="dropdown"><a href="servicios.html">Servicios</a></li>
                                        <li class="dropdown"><a href="estudios.html">Estudios </a></li>
                                        <li class="dropdown"><a href="habilitaciones.html">Habilitaciones</a></li>
                                        <li class="dropdown"><a href="preguntasfrecuentes.html">Preguntas</a></li>
                                        <li class="dropdown"><a href="otros.html">Otros</a></li>
                                        <li class="dropdown active"><a href="contactmediservis.php">Contáctenos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="home.html">Inicio</a> &nbsp;/&nbsp; <span>Contáctenos</span>
            </div> 

        <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contáctenos</h1>
                   	<h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
					<hr>
			<!--Start Contact form -->					                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
  <fieldset>
    
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Nombre" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comentarios"></textarea>
    <div class="actions">
	<input type="submit" value="Enviar" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
			<!--End Contact form -->											 
                </div>
				
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Información de Contacto</h3>
                    <div id="googleMap" class="sidebox" style="width:auto;height:200px;"></div>
					<p>
                        <address><strong>Mediservis del Tolima IPS S.A.S.</strong><br />
                        Cra 4B # 39B-44, La Macarena parte alta<br />
                        Ibagué Tolima, Colombia.<br />
                        <abbr title="Phone">Tel:</abbr> (8) 280 9432 / 304-5324 149</address> 
                        <address>  <strong>Email</strong><br />
                        <a href="mailto:#">servicioalcliente@mediservisdeltolima.com</a></address>  
                    </p>     
                                         					
                    </div>
					
					
                    
                </div>
			<!--/End Sidebar Content-->
				
				
            </div>			

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                
                <div class="span5" id="footerArea1">
                    <h3>Contactenos</h3>

                    <ul id="contact-info">
                        <li>
                            <i class="general foundicon-phone icon"></i>
                            <span class="field">Teléfono:</span>
                            <br />
                            +57 (608) 2809432
                            </li>
                            <li>
                                <i class="general foundicon-mail icon"></i>
                                <span class="field">Email:</span>
                                <br />
                                <a href="mailto:servicioalcliente@mediservisdeltolima.com"
                                    title="Email">servicioalcliente@mediservisdeltolima.com</a><br />
                                <a href="mailto:laboratorio@mediservisdeltolima.com"
                                    title="Email">laboratorio@mediservisdeltolima.com</a><br />
                                <a href="mailto:auxiliar@mediservisdeltolima.com"
                                    title="Email">auxiliar@mediservisdeltolima.com</a>
                            </li>
                            <li>
                                <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                                <span class="field">Dirección:</span>
                                <br />
                                Calle 40 # 4G-14<br />
                                Barrio Macarena Parte Baja<br />
                                Ibagué Tolima, Colombia.
                            </li>
                        </ul>
                    </div>

                </div>

                <br /><br />
                <div class="row-fluid">
                    <div class="span12">
                        <p class="copyright">
                            Copyright © 2023 Mediservis del Tolima. All Rights Reserved.
                        </p>

                    <p class="social_bookmarks">
                        <a href="https://www.facebook.com/MediservisdelTolima/"><i class="social foundicon-facebook"></i> Facebook</a>
			<a href="https://twitter.com/MediservisTol"><i class="social foundicon-twitter"></i> Twitter</a>
			<a href="https://www.instagram.com/mediservisdeltolima/"><i class="social foundicon-instagram"></i> Instagram</a>
                    </p>
                </div>
            </div>
            <br />

        </div>

    </div>
    
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>
<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("someone@example.com","My subject",$msg);
?>




</body>
</html>