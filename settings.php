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
			<nav id="nav">
				<ul>
					<li >
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
			

			<form action="funcs/setting_functions.php" method="post" class="form-inline" name="submit_settings">
               
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label"># Rounds</label>
                  <div class="col-sm-10">
                     
                     <select name="n_rounds" class="form-control" required>
                        <option name="<?php echo $settings[2][2] ?>">
                          <?php echo $settings[2][2] ?>
                        </option>
                     	<option name="1">1</option>
                     	<option name="1">2</option>
                     	<option name="1">3</option>
                     	<option name="1">4</option>
                     	<option name="1">5</option>
                     	<option name="1">6</option>
                     	<option name="1">7</option>
                     	<option name="1">8</option>
                     	<option name="1">9</option>
                     	<option name="1">10</option>
                     	<option name="1">11</option>
                     	<option name="1">12</option>
                     	<option name="1">13</option>
                     	<option name="1">14</option>
                     	<option name="1">15</option>
                     	<option name="1">16</option>
                     	<option name="1">17</option>
                     	<option name="1">18</option>
                     	<option name="1">19</option>
                     	<option name="1">20</option>
                     </select>


                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label"># Teams</label>
                  <div class="col-sm-10">
                     
                     <select name="n_teams" class="form-control" required>
                        <option name="<?php echo $settings[11][2] ?>">
                          <?php echo $settings[11][2]; ?>
                        </option>
                        <?php 
                           for ($i=1; $i <5 ; $i++) { 
                           	  if ($settings[11][2] == $i) {
                           	  	# code...
                           	  }
                           	  else{
                           	  	echo '<option name="'.$i.'">'.$i.'</option>';
                           	  }
                           }
                        ?>
                     	
                     	
                     </select>

                     
                  </div>
                </div>


                <hr>
               <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">Team 1 ATH</label>
                  <div class="col-sm-10">
                      <input value="<?php echo $settings[0]['value'] ?>" name="target_ath_team1" type="text" class="form-control" placeholder="ATH">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label">Team 1 HOLD</label>
                  <div class="col-sm-10">
                     <input value="<?php echo $settings[1]['value'] ?>" name="target_hold_team1" type="text" class="form-control" placeholder="Hold">
                  </div>
                </div>
                 <br><br>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">Team 2 ATH</label>
                  <div class="col-sm-10">
                      <input value="<?php echo $settings[3]['value'] ?>" name="target_ath_team2" type="text" class="form-control" placeholder="ATH">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label">Team 2 HOLD</label>
                  <div class="col-sm-10">
                     <input value="<?php echo $settings[6]['value'] ?>" name="target_hold_team2" type="text" class="form-control" placeholder="HOLD">
                  </div>
                </div>
                <br><br>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">Team 3 ATH</label>
                  <div class="col-sm-10">
                      <input value="<?php echo $settings[4]['value'] ?>" name="target_ath_team3" type="text" class="form-control" placeholder="ATH">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label">Team 3 HOLD</label>
                  <div class="col-sm-10">
                     <input value="<?php echo $settings[7]['value'] ?>" name="target_hold_team3" type="text" class="form-control" placeholder="HOLD">
                  </div>
                </div>
                <br><br>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-12 col-form-label">Team 4 ATH</label>
                  <div class="col-sm-10">
                      <input value="<?php echo $settings[5]['value'] ?>" name="target_ath_team4" type="text" class="form-control" placeholder="ATH">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-12 col-form-label">Team 4 HOLD</label>
                  <div class="col-sm-10">
                     <input value="<?php echo $settings[8]['value'] ?>" name="target_hold_team4" type="text" class="form-control" placeholder="HOLD">
                  </div>
                </div>



               

                <button class="btn btn-success" name="submit_settings">Submit</button>
			</form>
            <br><br><br>
			
			<a href="funcs/reset_funcs.php" class="btn btn-success">Reset Settings</a>

             
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