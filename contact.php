﻿<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Your Name Here - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

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
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    <script src="email/validation.js" type="text/javascript"></script>
</head>

<body id="pageBody">

    <div id="decorative2">
        <div class="container">

            <div class="divPanel topArea notop nobottom">
                <div class="row-fluid">
                    <div class="span12">

                        <div id="divLogo" class="pull-left">
                            <a href="index.html" id="divSiteTitle">Your Name Here</a><br />
                            <a href="index.html" id="divTagLine">Your Tag Line Here</a>
                        </div>

                        <div id="divMenuRight" class="pull-right">
                            <div class="navbar">
                                <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                                    NAVIGATION <span class="icon-chevron-down icon-white"></span>
                                </button>
                                <div class="nav-collapse collapse">
                                    <ul class="nav nav-pills ddmenu">
                                        <li class="dropdown"><a href="index.html">Home</a></li>
                                        <li class="dropdown"><a href="about.html">About</a></li>
                                        <li class="dropdown">
                                            <a href="page.html" class="dropdown-toggle">Page <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="full.html">Full Page</a></li>
                                                <li><a href="2-column.html">Two Column</a></li>
                                                <li><a href="3-column.html">Three Column</a></li>
                                                <li><a href="../documentation/index.html">Documentation</a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                                                    <ul class="dropdown-menu sub-menu">
                                                        <li><a href="#">Dropdown Item</a></li>
                                                        <li><a href="#">Dropdown Item</a></li>
                                                        <li><a href="#">Dropdown Item</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="gallery.html">Gallery</a></li>
                                        <li class="dropdown active"><a href="contact.php">Contact</a></li>
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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Contact Us</span>
            </div>

            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contact Us</h1>
                    <h3 style="color:#FF6633;"><?php echo $_GET[msg]; ?></h3>
                    <hr>
                    <!--Start Contact form -->
                    <form name="enq" method="post" action="email/" onsubmit="return validation();">
                        <fieldset>

                            <input type="text" name="name" id="name" value="" class="input-block-level" placeholder="Name" />
                            <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
                            <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
                            <div class="actions">
                                <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                            </div>

                        </fieldset>
                    </form>
                    <!--End Contact form -->
                </div>

                <!--Edit Sidebar Content here-->
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Contact Information</h3>
                        <p>
                        <address><strong>Your Company, Inc.</strong><br />
                            Address<br />
                            City, State, Zip<br />
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <address> <strong>Email</strong><br />
                            <a href="mailto:#">first.last@gmail.com</a>
                        </address>
                        </p>

                        <!-- Start Side Categories -->
                        <h4 class="sidebox-title">Sidebar Categories</h4>
                        <ul>
                            <li><a href="#">Quisque diam lorem sectetuer adipiscing</a></li>
                            <li><a href="#">Interdum vitae, adipiscing dapibus ac</a></li>
                            <li><a href="#">Scelerisque ipsum auctor vitae, pede</a></li>
                            <li><a href="#">Donec eget iaculis lacinia non erat</a></li>
                            <li><a href="#">Lacinia dictum elementum velit fermentum</a></li>
                            <li><a href="#">Donec in velit vel ipsum auctor pulvinar</a></li>
                        </ul>
                        <!-- End Side Categories -->

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
                                +57 (608) 2809432 | Celular: +57 3045324149 / +57 3163701912
                            </li>
                            <li>
                                <i class="general foundicon-mail icon"></i>
                                <span class="field">Email:</span>
                                <br />
                                <a href="mailto:servicioalcliente@mediservisdeltolima.com" title="Email">servicioalcliente@mediservisdeltolima.com</a><br />
                                <a href="mailto:laboratorio@mediservisdeltolima.com" title="Email">laboratorio@mediservisdeltolima.com</a><br />
                                <a href="mailto:auxiliar@mediservisdeltolima.com" title="Email">auxiliar@mediservisdeltolima.com</a>
                            </li>
                            <li>
                                <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                                <span class="field">Dirección:</span>
                                <br />
                                Cra 4B # 39B-44<br />
                                La Macarena parte alta<br />
                                Ibagué Tolima, Colombia.
                            </li>
                        </ul>
                    </div>

                </div>

                <br /><br />
                <div class="row-fluid">
                    <div class="span12">
                        <p class="copyright">
                            Copyright © 2013 Your Company. All Rights Reserved.
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
    $msg = wordwrap($msg, 70);

    // send email
    mail("someone@example.com", "My subject", $msg);
    ?>




</body>

</html>