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

		
		<div class="main" style="padding: 4%">	
		<a href="questions_settings.php" class="btn btn-success">Questions Settings</a>
		<a href="counter_settings.php" class="btn btn-success">Counter Algorithm</a>
		<br><br>
		<a href="counter_settings.php?team=1" class="btn btn-success">Team 1</a>
		<a href="counter_settings.php?team=2" class="btn btn-success">Team 2</a>
		<a href="counter_settings.php?team=3" class="btn btn-success">Team 3</a>
		<a href="counter_settings.php?team=4" class="btn btn-success">Team 4</a>
		<br><br>
         <h1 style="background-color: #5cb85c; color: white; font-size: 22px;">
         SETTINGS </h1>
			<br>

		<?php
		  require_once 'lib/counter.php';
		  require_once 'lib/database.php';
		  //get_by_query($q)
		  $_counter = new Counter();
		  $_db      = new Database();
		  if (isset($_GET['team'])) {
		  	$team = $_GET['team'];
		  }
		  else{
		  	$team='1';
		  }
		  
		  $q = "SELECT * FROM counter_conditions WHERE team='team".$team."' and conditionType='aht' ";

		  
         
          require_once 'lib/settings.php';
	      $_sett = new Setting();
	      $search = 'taget_time_team'.$team;
	      $sett = $_sett->get_roundData('type',$search);
          $taget_time = $sett[0][2];
         


		  $counter_set  = $_db->get_by_query($q);
           
		  if (isset($_GET['team'])) 
		  {
		  	echo '<p style="background-color: rgba(92, 184, 92, 0.34); padding: 5px;">Team '.$_GET['team'].'</p><br>';

		  	for($i=0; $i <count($counter_set) ; $i++) 
		    { 
		  	   
		  	 
		  	 	if ($counter_set[$i]['start'] > 0) 
		  	 	{
		  	 	    echo '<form action="funcs/counter_functions2.php?condition='.$counter_set[$i]['conditionNumber'].'"  method="post" class="form-inline"  name="counter_aht_condition">
			         <div class="row">
			        <div class="col-md-2" style="font-size:20px; ">';
			    echo '<h1 style="height:100%; background-color: #5cb85c; color: white; font-size: 18px; padding:10px;">
                    AHT STEP '.$counter_set[$i]['conditionNumber'].' </h1>';
                echo '</div>
                      <div class="col-md-4" style="font-size:20px; 
                       padding:7px ">              
                        From 
                       <input style="text-align:center;" type="text" name="aht_start" value="'.$counter_set[$i]['start'].'" size="3" readonly >';
                       echo ' => ';
                       if ($counter_set[$i]['conditionNumber'] == 1) {
                       	
                       	echo '<input style="text-align:center;" type="text" name="aht_end" value="'.$taget_time.'" size="3">';
                       }
                       else{
                       	 if ($counter_set[$i]['conditionNumber'] == 4) {
                       	 	echo '<input style="text-align:center;" type="text" name="aht_end" value="5000" size="3">';
                       	 }
                       	 else{
                       	 	echo '<input style="text-align:center;" type="text" name="aht_end" value="'.$counter_set[$i]['end'].'" size="3">';
                       	 }
                       }
                       
                       echo' = <input style="text-align:center;" type="text" name="aht_points" value="'.$counter_set[$i]['points'].'" size="3"> Points
                       </div>
                       <div class="col-md-1" style="font-size:20px; ">
                       <input style="text-align:center;" type="text" name="team" value="'.$_GET['team'].'" hidden="true" size="3">';
                       echo '<button style=" padding:10px"  class="btn btn-success" name="counter_aht_condition">Submit</button>
                       </div></div></form>';
		  	 	}        
		  	 
		  }
		  }

		?>




		<?php
		  
		  $q2 = "SELECT * FROM counter_conditions WHERE team='team".$team."' and conditionType='hold' ";

		  
         
          
	      $search2 = 'taget_hold_team'.$team;
	      $sett2 = $_sett->get_roundData('type',$search2);
          $hold = $sett2[0][2];

         


		  $counter_set2  = $_db->get_by_query($q2);
           
		  if (isset($_GET['team'])) 
		  {
		  	echo '<p style="background-color: rgba(92, 184, 92, 0.34); padding: 5px;">Team '.$_GET['team'].'</p><br>';
		  	
		  	for($i=0; $i <count($counter_set2) ; $i++) 
		    { 
		  	   
		  	 
		  	 	
		  	 	    echo '<form action="funcs/counter_functions2.php?condition='.$counter_set2[$i]['conditionNumber'].'"  method="post" class="form-inline"  name="counter_hold_condition">
			         <div class="row">
			        <div class="col-md-2" style="font-size:20px; ">';
			    echo '<h1 style="height:100%; background-color: #5cb85c; color: white; font-size: 18px; padding:10px;">
                    Hold STEP '.$counter_set2[$i]['conditionNumber'].' </h1>';
                echo '</div>
                      <div class="col-md-4" style="font-size:20px; 
                       padding:7px ">              
                        From 
                       <input style="text-align:center;" type="text" name="hold_start" value="'.$counter_set2[$i]['start'].'" size="3" readonly >';
                       echo ' => ';
                       if ($counter_set2[$i]['conditionNumber'] == 1) {
                       	
                       	echo '<input style="text-align:center;" type="text" name="hold_end" value="'.$hold.'" size="3">';
                       }
                       else{
                       	 if ($counter_set2[$i]['conditionNumber'] == 4) {
                       	 	echo '<input style="text-align:center;" type="text" name="hold_end" value="5000" size="3">';
                       	 }
                       	 else{
                       	 	echo '<input style="text-align:center;" type="text" name="hold_end" value="'.$counter_set2[$i]['end'].'" size="3">';
                       	 }
                       }
                       
                       echo' = <input style="text-align:center;" type="text" name="hold_points" value="'.$counter_set2[$i]['points'].'" size="3"> Points
                       </div>
                       <div class="col-md-1" style="font-size:20px; ">
                       <input style="text-align:center;" type="text" name="team" value="'.$_GET['team'].'" hidden="true" size="3">';
                       echo '<button style=" padding:10px"  class="btn btn-success" name="counter_hold_condition">Submit</button>
                       </div></div></form>';
		  	 
		  }
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