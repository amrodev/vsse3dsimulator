<?php ob_start(); ?>
<?php 
session_start();
require 'config.php';
if (isset($_POST['next_round'])) {
	$_SESSION['Round']++;
	$_SESSION['RoundCompleate_team1'] = false;
	$_SESSION['RoundCompleate_team2'] = false;
	$_SESSION['RoundCompleate_team3'] = false;
	$_SESSION['RoundCompleate_team4'] = false;
	$_SESSION['RoundQualityCompleate_team1'] = false;
	$_SESSION['RoundQualityCompleate_team2'] = false;
	$_SESSION['RoundQualityCompleate_team3'] = false;
	$_SESSION['RoundQualityCompleate_team4'] = false;

    //Round
    $_SESSION['Team1BonusScoreRound']         = 0;	
	$_SESSION['Team1QuantityScoreRound']      = 0;
	$_SESSION['Team1QuantityScoreTotalRound'] = 0;
	$_SESSION['Team1QualityScoreRound']       = 0;

	$_SESSION['Team2BonusScoreRound']         = 0;	
	$_SESSION['Team2QuantityScoreRound']      = 0;
	$_SESSION['Team2QuantityScoreTotalRound'] = 0;
	$_SESSION['Team2QualityScoreRound']       = 0;

	$_SESSION['Team3BonusScoreRound']         = 0;	
	$_SESSION['Team3QuantityScoreRound']      = 0;
	$_SESSION['Team3QuantityScoreTotalRound'] = 0;
	$_SESSION['Team3QualityScoreRound']       = 0;

	$_SESSION['Team4BonusScoreRound']         = 0;	
	$_SESSION['Team4QuantityScoreRound']      = 0;
	$_SESSION['Team4QuantityScoreTotalRound'] = 0;
	$_SESSION['Team4QualityScoreRound']       = 0;
    
	
    //TOTAL
	$_SESSION['Team1BonusTotal'] = 0;
	$_SESSION['Team1QuantityTotal'] = 0;
	$_SESSION['Team1Total'] = 0;
	$_SESSION['Team1QualityTotal'] = 0;

	$_SESSION['Team2BonusTotal'] = 0;
	$_SESSION['Team2QuantityTotal'] =0;
	$_SESSION['Team2Total'] = 0;
	$_SESSION['Team2QualityTotal'] = 0;

	$_SESSION['Team3BonusTotal'] = 0;
	$_SESSION['Team3QuantityTotal'] = 0;
	$_SESSION['Team3Total'] = 0;
	$_SESSION['Team3QualityTotal'] = 0;

	$_SESSION['Team4BonusTotal'] = 0;
	$_SESSION['Team4QuantityTotal'] = 0;
	$_SESSION['Team4Total'] = 0;
	$_SESSION['Team4QualityTotal'] = 0;

    $_SESSION['Team1BonusScoreRound']  = 0;
    $_SESSION['Team2BonusScoreRound']  = 0;
    $_SESSION['Team3BonusScoreRound']  = 0;
    $_SESSION['Team4BonusScoreRound']  = 0;

    $_SESSION['team1_done'] = false;
    $_SESSION['team2_done'] = false;
    $_SESSION['team3_done'] = false;
    $_SESSION['team4_done'] = false;
    $_SESSION['all_team_done'] = false;


    
    
   header("Location: counter.php");
    

	
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php 

if ($_SESSION['all_team_done'] == true) 
{
	 
}
if ($n_teams == 4) 
{
	if ($_SESSION['team1_done'] == true && 
	$_SESSION['team2_done'] == true &&
	$_SESSION['team3_done'] == true &&
	$_SESSION['team4_done'] == true ) 
{
	echo '<form name="next_round" method="post" action="sessions_counter.php">';
    
    echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
    echo '<button name="next_round"  id="button-start" 
      style=" color: #5d33f5; border-color: #5d33f5; 
      font-size: 17px; background-color: white; " 
      class="btn btn-success">Next >></button>';
    echo '</form>';}
else{
	
	echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
}
}

if ($n_teams == 3) {
	if ($_SESSION['team1_done'] == true && 
	$_SESSION['team2_done'] == true &&
	$_SESSION['team3_done'] == true) 
{
	echo '<form name="next_round" method="post" action="sessions_counter.php">';
    
    echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
    echo '<button name="next_round"  id="button-start" 
      style=" color: #5d33f5; border-color: #5d33f5; 
      font-size: 17px; background-color: white; " 
      class="btn btn-success">Next >></button>';
    echo '</form>';}
else{
	
	echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
}
}


if ($n_teams == 2) {
	if ($_SESSION['team1_done'] == true && 
	$_SESSION['team2_done'] == true ) 
{
	echo '<form name="next_round" method="post" action="sessions_counter.php">';
    
    echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
    echo '<button name="next_round"  id="button-start" 
      style=" color: #5d33f5; border-color: #5d33f5; 
      font-size: 17px; background-color: white; " 
      class="btn btn-success">Next >></button>';
    echo '</form>';}
else{
	
	echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
}
}

if ($n_teams == 1) {
	if ($_SESSION['team1_done'] == true ) 
{
	echo '<form name="next_round" method="post" action="sessions_counter.php">';
    
    echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
    echo '<button name="next_round"  id="button-start" 
      style=" color: #5d33f5; border-color: #5d33f5; 
      font-size: 17px; background-color: white; " 
      class="btn btn-success">Next >></button>';
    echo '</form>';}
else{
	
	echo '<a  id="button-start" style=" font-size:25px; font-weight: 600; 
		background-color: #536dfe;" class="btn btn-success">
		ROUND '.$_SESSION['Round'].'</a>';
}
}


?>
</body>
</html>
