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
			<nav id="nav">
				<ul>
					<li class="active">
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
			<a href="index.php"><img style="margin-left: 25%" src="<?php echo $logo; ?>" width="30%"/></a>
		</div>
		
		</div><br>

		<br><br>
		<div class="main" style="padding: 8%">	
		<a href="questions_settings.php" class="btn btn-success">Question Categories</a>
        <a href="questions_settings.php" class="btn btn-success">
        New Question</a>
		<br><br>
         <h1 style="background-color: #5cb85c; color: white; font-size: 22px;">
         QUESTIONS</h1>
			<br><br>


        <?php 
         
         	/////////update////////////
         	if ( isset($_GET['type']) && $_GET['type'] = 'edit') 
         	{
         		$id = $_GET['id'];
         		require_once 'lib/questions.php';
         		$_ques    = new Questions();
         		$question = $_ques->get_questionData('id',$id);
         		echo '<div class="row"><div class="input-group">';
         		echo '<form action="funcs/question_funcs.php" method="post" name="update_question">';
         		echo '<input type="text" name="id" value="'.$id.'" hidden="true">';
         		echo '<input class="form-control" value="'.$question[0]['question'].'" name="question" type="text" >
					<br><br>
					<input name="r1" type="text" placeholder="Round 1" value="'.$question[0]['round1'].'">
					<input name="r2" type="text" placeholder="Round 2"  value="'.$question[0]['round2'].'">
					<input name="r3" type="text" placeholder="Round 3"  value="'.$question[0]['round3'].'">
					<input name="r4" type="text" placeholder="Round 4"  value="'.$question[0]['round4'].'">
					<input name="r5" type="text" placeholder="Round 5"  value="'.$question[0]['round5'].'">
					<input name="r6" type="text" placeholder="Round 6"  value="'.$question[0]['round6'].'">
					<input name="r7" type="text" placeholder="Round 7"  value="'.$question[0]['round7'].'">
					<input name="r8" type="text" placeholder="Round 8"  value="'.$question[0]['round8'].'">
					<input name="r9" type="text" placeholder="Round 9"  value="'.$question[0]['round9'].'">
					<input name="r10" type="text" placeholder="Round 10"  value="'.$question[0]['round10'].'">
					<input name="r11" type="text" placeholder="Round 11"  value="'.$question[0]['round11'].'">
					<input name="r12" type="text" placeholder="Round 12"  value="'.$question[0]['round12'].'">
					<input name="r13" type="text" placeholder="Round 13"  value="'.$question[0]['round13'].'">
					<input name="r14" type="text" placeholder="Round 14"  value="'.$question[0]['round14'].'">
					<input name="r15" type="text" placeholder="Round 15"  value="'.$question[0]['round15'].'">
					<input name="r16" type="text" placeholder="Round 16"  value="'.$question[0]['round16'].'">
					<input name="r17" type="text" placeholder="Round 17"  value="'.$question[0]['round17'].'">
					<input name="r18" type="text" placeholder="Round 18"  value="'.$question[0]['round18'].'">
					<input name="r19" type="text" placeholder="Round 19"  value="'.$question[0]['round19'].'">
					<input name="r20" type="text" placeholder="Round 20"  value="'.$question[0]['round20'].'">
					
					<button style="background-color: #5cb85c; color: white;" class="form-control" name="update_question">Edit Question</button><br>
                    
					';
         		echo '</form>';
                echo '<form action="funcs/question_funcs.php" method="post" name="delete_question">';
                echo '<input type="text" name="id" value="'.$id.'" hidden="true">';
                echo '<button style="background-color: #5cb85c; color: white;" class="form-control" name="delete_question">Delete Question</button><br>
                 </form>
         		';
         		echo '</div></div>';
         		//
         	}
            //<button style="background-color: #5cb85c; color: white;" class="form-control" name="del_question">Delete Question</button>
         	/////////Delete////////////

         	
       
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