<?php ob_start(); 
require_once 'config.php';
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
			<nav id="nav">
				
			</nav>
			<div class="copyright">
				<p>© 2017</p>
			</div>
		</div>
		<!-- Left sidebar .end -->

		<!-- Mobile top bar (Logo, Menu, Contact button) -->
		
		<!-- Mobile top bar .end -->

		

		<!-- Main container (About, Services, Resume, Portfolio) -->
		
		
		<div style="float:left">
			<a href="index.php"><img style="margin-left: 25%" src="<?php echo $logo; ?>" width="30%"/></a>
		</div>
		
		</div><br>

		<?php
		  if ($_GET['round'] > $n_rounds) {
		  	header("Location: quality_thanks.php");
		  }
		?>

		<br><br>
		<div class="main" style="padding: 8%">	
         <h1 style="background-color: #5cb85c; color: white; font-size: 22px;">
         Round <?php echo $_GET['round']; ?> Evaluation ( <?php echo $_GET['team'] ?> ) - <?php
         session_start();
         
            if (isset($_SESSION['QualityMessage'])) {
            	echo $_SESSION['QualityMessage'];
            }
         	
       
          ?></h1>
			<br><br>
			
			<?php

			
			if (isset($_GET['round']) && isset($_GET['team'])) 
			{
				$session_round = $_GET['round'];
			    if ($session_round == $_GET['round']) 
			    {
				   require 'lib/questions.php';
				   $_questions = new Questions();
				   $questions = $_questions->get_by_round('round'.$session_round);
				   echo '<form method="post" action="funcs/question_funcs.php?qround='.$_GET['round'].'&team='.$_GET['team'].'" name="submit_questions">';
			 	   for ($i=0; $i <count($questions) ; $i++) { 
			 		    echo '<div class="row">
                          <div class="input-group">
                          <h4 style="margin-bottom:5px;">
			 			  <span style="padding:0px 4px 0px 4px; background-color: #920707; font-size:22px; color: white;">'.$questions[$i]['questionType'].'</span>
			 			  <span style="padding:2px; margin-left: -4px; background-color: #e6e730; color: black;">'.$questions[$i]['question_subtitle'].'</span>
			 			  </h4>
                          <label>'.$questions[$i]['question'].'</label>            
                          <select name="'.$questions[$i]['id'].'" class="form-control" style="margin-top:5px;" required>
                 	      <option value="">Please Select Rating</option>                 	          
                 	      <option value="e">Excellent </option>
                 	      <option value="a">Average</option>
                 	      <option value="p">Poor</option>                 	          
                          </select></div></div><hr>';
                   }
			 	   echo '<button class="btn btn-success" name="submit_questions">Submit</button>';
			    } 
			    
			    else{
			    	$nextRound = $session_round+1;
			    	echo '<div class="row"><h1>please wait...</h1></div>';
                    $_url = 'questions.php?round='.$_GET['round'].'&team='.$_GET['team'];
			    	header("Refresh: 50; url=$_url");
			    }
			}
				
			?>
			
			</form>

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