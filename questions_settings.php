<?php ob_start(); 
require_once 'config.php';
require_once 'lib/settings.php';
$_settings = new Setting();
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

		<br><br>
		<div class="main" style="padding: 8%">	
		
		<a href="questions_cats.php" class="btn btn-success">Question Categories</a>
        <a href="new_question.php" class="btn btn-success">
        New Question</a>
		<br><br>
         <h1 style="background-color: #5cb85c; color: white; font-size: 22px;">
         QUESTIONS</h1>
			<br><br>

			<div class="row" align="center">
              <div class="col-md-2" 
              style="background-color: #920707; color:white; font-size:20px; padding:3px;">Category</div>
              <div class="col-md-2" 
              style="background-color: #e6e730; color:black; font-size:20px;  padding:3px;">Sub Category</div>
              <div class="col-md-6" style="background-color: #536dfe; color:white; font-size:20px; padding:3px;">Question</div>
              <div class="col-md-2" style="background-color:  rgb(232, 26, 34); color:white; font-size:20px; padding:3px;">Action</div>  
            </div>

            <?php 
              require_once 'lib/questions.php';
              $_ques = new Questions();
              $questions = $_ques->get_all();
              for ($i=0; $i <count($questions) ; $i++) 
              { 
              	echo '<br>';
              	echo '<div class="row" align="left" style="background-color: rgba(83, 109, 254, 0.04);">';
              	echo '<div class="col-md-2" 
                      style="padding:3px;">
                      '.$questions[$i]['questionType'].'
                      </div>';
              	echo '<div class="col-md-2" 
                      style="padding:3px;">
                      '.$questions[$i]['question_subtitle'].'
                      </div>';
              	echo '<div class="col-md-6" style="padding:3px;">
              	      '.$questions[$i]['question'].'
              	      </div>';
              	echo '<div class="col-md-2" style="padding:3px;" align="center">
              	       <a href="questions_edit.php?type=edit&id='.$questions[$i]['id'].'">Edit </a>
              	       <a style="margin-left:15px;" href="funcs/question_funcs.php?qdel='.$questions[$i]['id'].'"> Delete</a> 
              	      </div>';
              	echo '</div>';
              }
            ?> 
                
            


			

			

             
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