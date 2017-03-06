<?php 
ob_start();
session_start();
require_once 'config.php';
?>
<?php 
require_once 'lib/settings.php';
$_settings = new Setting();

$roundNumbers = $_settings->get_by_where1('type','n_rounds');
$_rounds = $roundNumbers[0]['value'];

if ($_SESSION['all_team_done'] == true) 
{	 
  header("Location: counter.php");
  $_SESSION['all_team_done'] = false;	
}


if ($_SESSION['Round'] > $_rounds) {
	header("Location: thanks.php");
}

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
	    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
	     <script>
    function ajaxCall() {
      $.ajax({
         url: "sessions_counter.php", 
         success: (function (result) {
             $("#div1").html(result);
         })
      })
    };
ajaxCall(); // To output when the page loads
setInterval(ajaxCall, (2 * 1000)); // x * 1000 to get it in seconds
</script>
	    

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
               <a href="funcs/counter_functions2.php?reset=counters" id="button-start" style="color:white; font-size:18px;">
		           Reset</a>
			</div>
			<nav id="nav">

				<ul>
					<li>
						<a href="index.php" style="border-bottom: 0px;">
							<i class="ti-home"></i>
						</a>
					</li>
					<li>
						<a href="start.php" style="border-bottom: 0px;">
							<i class="ti-alarm-clock"></i>
						</a>
					</li>
					<li>
						<a href="settings.php" style="border-bottom: 0px;">
							<i class="ti-ruler-pencil"></i>
						</a>
					</li>
					
				</ul>
			</nav>
			<div class="copyright">
				<p>© 2017</p>
			</div>
		</div>
		<!-- Left sidebar .end -->

		<!-- Mobile top bar (Logo, Menu, Contact button) -->
		<div class="mobile-bar">
			<div class="logo-mobile"><h1>RESUMY</h1></div>
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
			<a href="index.php"><img style="width:30%; margin-left: 25%" src="<?php echo $logo; ?>" width="30%"/></a>
			
		</div>
		
		</div><br>

		<?php

		
		echo $_SESSION['RoundQualityCompleate_team4'];
		  
		  if (isset($_SESSION['Round'])) 
		  {
		  

		  	echo '<center><div id="div1"></div></center>';
		  	
		  	 	
		  		# code...
		  	
		  }
		  else{
		  	header("Location: index.php");
		  }
		?>	
		
		<br><br>
		<div class="main" align="left" style="margin-left:5%;">
		<?php 
		 $x = 1;
		 for ($i=0; $i <$n_teams ; $i++) 
		 { 
		 	echo '<iframe height="300px;" scrolling="no" frameborder="0"  src="team'.$x.'.php" width="48%"></iframe>';
		 	$x++;
		 	
		 }
		?>

				
				
				
				
			<!-- About section .end -->

			

			
		</div>

		<center>Powered By MIPS</center>
		

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