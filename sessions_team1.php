<?php ob_start(); ?>
<?php 
session_start();
require_once 'lib/database.php';
$_db = new Database();
$round = $_SESSION['Round'];
$q = "SELECT quality_round".$round.",quantity_round".$round." FROM rounds WHERE team='team1'";
$result = $_db->get_by_query($q);

if ( $_SESSION['team1_done'] == false) {
	if ($result[0][0] >0 && $result[0][1] >0) {
	 
	 $_SESSION['team1_done'] = true;
	 
}
elseif ($result[0][1] >0) {
	echo '<h4 style=" max-width: 230px;"><img src="images/finish.png" style="width: 8%; margin-top: -9px;" />Quantity is finished<h4>';
	echo '<h4 style=" max-width: 230px;"><img  src="images/waiting.gif" style="width: 7%;" />Waiting Quality Score</h4>';
	
}
}
else{
	echo '<h4 style=" max-width: 350px; "><img src="images/finish.png" style="width: 8%; margin-top: -9px;" />Round Evaluation is finished<h4>';        
}

?>