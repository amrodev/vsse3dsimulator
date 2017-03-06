<?php require_once 'config.php'; ?>

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
		
		<!-- Preloader .end -->
		
		

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

		<!-- Home section -->
		<div class="wrapper" id="home" style="background-image: url(<?php echo $bg; ?>);">
			<div id="particles-js"></div>
			<?php 
			  $_round = new Database();
              
              $q = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15+quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15+bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team1'";
			  $totalTeam_1 = $_round->get_by_query($q);
			  $totalTeam1  = $totalTeam_1[0][0];

			  $q = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15+quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15+bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team2'";
			  $totalTeam_2 = $_round->get_by_query($q);
			  $totalTeam2  = $totalTeam_2[0][0];


			  $q = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15+quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15+bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team3'";
			  $totalTeam_3 = $_round->get_by_query($q);
			  $totalTeam3  = $totalTeam_3[0][0];

			  $q = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15+quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15+bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team4'";
			  $totalTeam_4 = $_round->get_by_query($q);
			  $totalTeam4  = $totalTeam_4[0][0];

			  
			?>
			<div class="content" style="color:white; font-size:25px; background-color: rgba(60, 12, 32, 0.88);">				
				<br>
				<?php 
				 switch ($n_teams) {
				 	case '1':
				 		echo '<h1>Team 1 <span> '.$totalTeam1.'</span></h1><br>';
				 		break;
				 	case '2':
				 		echo '<h1>Team 1 <span> '.$totalTeam1.'</span></h1><br>';
				 		echo '<h1>Team 2 <span> '.$totalTeam2.'</span></h1><br>';
				 		break;
				 	case '3':
				 		echo '<h1>Team 1 <span> '.$totalTeam1.'</span></h1><br>';
				 		echo '<h1>Team 2 <span> '.$totalTeam2.'</span></h1><br>';
				 		echo '<h1>Team 3 <span> '.$totalTeam3.'</span></h1><br>';
				 		break;
				 	case '4':
				 		echo '<h1>Team 1 <span> '.$totalTeam1.'</span></h1><br>';
				 		echo '<h1>Team 2 <span> '.$totalTeam2.'</span></h1><br>';
				 		echo '<h1>Team 3 <span> '.$totalTeam3.'</span></h1><br>';
				 		echo '<h1>Team 4 <span> '.$totalTeam4.'</span></h1><br>';
				 		break;			
				 }
				?>
			
			</div>
			<br>
		</div>
		<!-- Home section .end -->

		<!-- Main container (About, Services, Resume, Portfolio) -->
		
		

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