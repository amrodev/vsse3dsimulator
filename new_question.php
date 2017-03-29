<?php ob_start(); 
require_once 'config.php';
require_once 'lib/settings.php';
$_settings = new Setting();
$settings = $_settings->get_all();

if (isset($_GET['catname'])) {
	$catname = $_GET['catname'];
	require_once 'lib/questions.php';
	$_subcats = new Questions();
	$subcats  = $_subcats->get_AllSubcatsWhere('catname',$catname);
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
         NEW QUESTION</h1>
			<br><br>
 

 <div class="row">
            <div class="input-group">
            
<form action="funcs/question_funcs.php" method="post" name="add_question">
					<select id="catname" onchange="answers()" name="catname" class="form-control"  style="margin-top:5px;" required>
					<?php
					if (isset($_GET['catname'])) {
					 	echo '<option  name="'.$_GET['catname'].'">'.$_GET['catname'].'</option>';
					 }
					 else{
					 	echo '<option  name="catname">please Select Category</option>';
					 } 
					?>              
                
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
              <script type="text/javascript">
                              function answers(){
                                var selected = document.getElementById("catname").value;
                                window.location.href="new_question.php?catname="+selected;
                                //alert(selected);
                              }
                            </script>
					
					<?php
					  if (isset($subcats)) {
					  	 echo '<select name="subcat" class="form-control"  style="margin-top:5px;" required> ';
					  	 for ($i=0; $i <count($subcats) ; $i++) 
					  	 { 
					  	 	echo '<option name="'.$subcats[$i]['catname'].'">'.$subcats[$i]['subcatname'].'</option>';
					  	 }
					  	 echo '</select>';
					  }
					?>
					<input class="form-control" name="question" type="text" placeholder="write Question" >
					<br><br>
					<input name="r1" type="text" placeholder="round 1 points">
					<input name="r2" type="text" placeholder="round 2 points">
					<input name="r3" type="text" placeholder="round 3 points">
					<input name="r4" type="text" placeholder="round 4 points">
					<input name="r5" type="text" placeholder="round 5 points">
					<input name="r6" type="text" placeholder="round 6 points">
					<input name="r7" type="text" placeholder="round 7 points">
					<input name="r8" type="text" placeholder="round 8 points">
					<input name="r9" type="text" placeholder="round 9 points">
					<input name="r10" type="text" placeholder="round 10 points">
					<input name="r11" type="text" placeholder="round 11 points">
					<input name="r12" type="text" placeholder="round 12 points">
					<input name="r13" type="text" placeholder="round 13 points">
					<input name="r14" type="text" placeholder="round 14 points">
					<input name="r15" type="text" placeholder="round 15 points">
					<input name="r16" type="text" placeholder="round 16 points">
					<input name="r17" type="text" placeholder="round 17 points">
					<input name="r18" type="text" placeholder="round 18 points">
					<input name="r19" type="text" placeholder="round 19 points">
					<input name="r20" type="text" placeholder="round 20 points">
					
					<button style="background-color: #5cb85c; color: white;" class="form-control" name="add_question">Add Question</button>
					</form>

            <hr>
			
                
            


			

			

             
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