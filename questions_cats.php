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
		
		<a href="questions_settings.php" class="btn btn-success">Question Categories</a>
        <a href="questions_settings.php" class="btn btn-success">
        New Question</a>
		<br><br>
         <h1 style="background-color: #5cb85c; color: white; font-size: 22px;">
         CATEGORIES</h1>
			<br><br>


			<div class="row">
            <div class="input-group">
            <label>Add New Category</label>  
            <form name="newcat" method="post" 
                  action="funcs/question_funcs.php">          
                <input type="text" name="catname" class="form-control"  style  ="margin-top:5px;" required>
                </div>
                <br>
                <BUTTON name="newcat" class="btn btn-success">
                Submit</BUTTON>
            </form>
            </div><hr>

            <div class="row">
            <div class="input-group">
            <form name="newsubcat" method="post" 
                  action="funcs/question_funcs.php"> 
            <label>Add New Sub Category</label>            
             
             <select name="catname" class="form-control"  style="margin-top:5px;" required>              
                <option name="">please Select Category</option>
                <?php
                   require_once 'lib/questions.php';
                   $_cats = new Questions();
                   $cats = $_cats->get_allCats();
                   for ($i=0; $i <count($cats) ; $i++) 
                   { 
                   	 echo '<option name="'.$cats[$i]['catname'].'">'.$cats[$i]['catname'].'</option>';
                   }
                ?>
              </select>
              <input type="text" name="subcat" class="form-control"  style  ="margin-top:5px;" required>
            </div>
            <br><BUTTON name="newsubcat" class="btn btn-success">
            Submit</BUTTON>
            </form>
            </div><hr>

			
<div class="row">
            <div class="input-group">
            <form name="delcat" method="post" 
                  action="funcs/question_funcs.php"> 
            <label>Delete Categoies</label>            
             
             <select name="catid" class="form-control"  style="margin-top:5px;" required>              
                <option name="">please Select Category</option>
                <?php
                   require_once 'lib/questions.php';
                   $_cats = new Questions();
                   $cats = $_cats->get_allCats();
                   for ($i=0; $i <count($cats) ; $i++) 
                   { 
                   	 echo '<option name="'.$cats[$i]['id'].'">'.$cats[$i]['catname'].'</option>';
                   }
                ?>
              </select>
              

              <br>

            </div>
            <br><BUTTON name="delcat" class="btn btn-success">
            Submit</BUTTON>
            </form>
</div></div>

			

			

             
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