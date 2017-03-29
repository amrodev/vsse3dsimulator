<?php ob_start(); 

require_once 'lib/settings.php';
$_settings = new Setting();
require_once 'config.php';
$settings = $_settings->get_all();

?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.enetheme.com/demo/index-constellation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 12:41:48 GMT -->
<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Title -->
		<title>3D Simulator Training Management System</title>

		<!-- Favicon -->
	    <link rel="shortcut icon" type="image/ico" href="images/favicon.png"/>

	    <!-- Icon Fonts -->
	    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">

	    <!-- Styles -->
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	    <link rel="stylesheet" type="text/css" href="css/animate.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">

	    <!-- Select your color (Blue, Red, Green, Purple, Teal, Orange or Cyan) -->
	    <link rel="stylesheet" type="text/css" id="colors" href="css/colors/blue.css">

	    <!-- Select your layout color (Light or Dark) -->
	    <link rel="stylesheet" type="text/css" id="layout-color" href="css/layout/style-light.css">
	    

    	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>

		<!-- Preloader -->
		<div class="preloader" id="preloader">
			<div class="content-spinner">
				<div class="spinner">
					<div class="double-bounce1"></div>
	  				<div class="double-bounce2"></div>
				</div>
				<p>Loading</p>
			</div>
		</div>
		<!-- Preloader .end -->
		
		<!-- Left sidebar -->
		<div style="width: 50px;" class="left-sidebar st-animated hide fadeInLeftBig">
			<div class="logo">
				
			</div>
			<?php require 'inc/menu.php' ?>
			<div class="copyright">
				<p>© 2017</p>
			</div>
		</div>
		<!-- Left sidebar .end -->

		<!-- Mobile top bar (Logo, Menu, Contact button) -->
		<div class="mobile-bar">
			<div class="logo-mobile"></div>
			<div class="buttons-mobile">
				<ul>
					<li class="btn-menu-mobile"><i class="ti-menu"></i></li>
					<li class="btn-contact-mobile"><i class="ti-email"></i></li>
				</ul>
			</div>
		</div>
		<!-- Mobile top bar .end -->

		

		<!-- Main container (About, Services, Resume, Portfolio) -->
		
		
		<div style="float:left">
			<a href="index.php"><img style="width:50%; margin-left: 25%" src="<?php echo $logo; ?>" width="30%"/></a>
		</div>
		
		</div><br>

		
		<div class="main" style="padding: 5%">	
		<a href="questions_settings.php" class="btn btn-success">Questions Settings</a>
		<a href="counter_settings.php" class="btn btn-success">Counter Algorithm</a>
		<a href="images_settings.php" class="btn btn-success">Images Settings</a>
		<br><br>
         <h1 style="background-color: #5cb85c; color: white; font-size: 22px;">
         SETTINGS </h1>
			<br><br>
			

			<form action="funcs/setting_functions.php" method="post" class="form-inline" name="update_logo" enctype="multipart/form-data">
               
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label">LOGO </label><br><br>
                  <div class="col-sm-10">  
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  
                  <img src="<?php echo $settings[9][2]; ?>" width="300" height="100" />                  
                     <button class="btn btn-success" name="update_logo">Submit</button>
                  </div>
                </div>
                <hr>
                </form>

                <form action="funcs/setting_functions.php" method="post" class="form-inline" name="update_background" enctype="multipart/form-data">
               
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label">Background (1920*1280)</label><br><br>
                  <div class="col-sm-10">                    
                     <input type="file" name="bgfile" id="bgfile"><img src="<?php echo $settings[10][2]; ?>" width="400" height="200" />                  
                     <button class="btn btn-success" name="update_background">Submit</button>
                  </div>
                </div>
                </form>
               

               


               

                
			
            <br><br><br>
			
			

             
    </div>


<br><br>


			
			

		</div>
		

		<!-- JavaScript plugins -->
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.nav.js"></script>
		<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js/particles.min.js"></script>
		<script type="text/javascript" src="js/effects/constellation.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>


<!-- Mirrored from www.enetheme.com/demo/index-constellation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 12:42:32 GMT -->
</html>