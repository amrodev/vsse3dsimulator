<?php  
ob_start();
session_start();

if(isset($_POST['start_counter'])) 
{
	$_SESSION['Round'] = 1;
	$_SESSION['OldRound'] = 1;
	header("Location: ../counter.php");
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
	        
}

if (isset($_POST['next_round'])) 
{
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


  
   
    
    
    header("Location: ../sessions_counter.php?all=done");
    

	
}

if (isset($_POST['saveRoundTeam1'])) 
{
	require_once '../lib/settings.php';
	require_once '../lib/counter.php';
	$_counter = new Counter();
	
	$_sett    = new Setting();
	

	$sett = $_sett->get_roundData('type','taget_time_team1');
    $taget_time = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','taget_hold_team1');
    $taget_hold = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','n_rounds');
    $n_rounds = $sett[0]['value'];

	$ath   = $_POST['ath'];
	if ($ath < 60) {
		$_SESSION['RoundCompleate_team1'] == false;
		header("Location: ../team1.php");
	}
	else{
		$hold  = $_POST['hold'];
	$bonus = $_POST['number'];
	$quantity_score = 0;
	$quantity_score_bonus = 0;
	$team = "team1";	

	//time

	$conditions = $_counter->get_by_where1('team',$team);	
	//conditionAHT1
	$start_aht1 = $conditions[0]['start'];
	$end_aht1   = $conditions[0]['end'];
	$point_aht1 = $conditions[0]['points'];
	//conditionAHT2
	$start_aht2 = $conditions[1]['start'];
	$end_aht2   = $conditions[1]['end'];
	$point_aht2 = $conditions[1]['points'];
	//conditionAHT3
	$start_aht3 = $conditions[2]['start'];
	$end_aht3   = $conditions[2]['end'];
	$point_aht3 = $conditions[2]['points'];
	//conditionAHT4
	$start_aht4 = $conditions[3]['start'];
	$end_aht4   = $conditions[3]['end'];
	$point_aht4 = $conditions[3]['points'];
	/////////////////////////////////////////
	//conditionHOLD1
	$start_hold1 = $conditions[4]['start'];
	$end_hold1   = $conditions[4]['end'];
	$point_hold1 = $conditions[4]['points'];
	//conditionHOLD2
	$start_hold2 = $conditions[5]['start'];
	$end_hold2   = $conditions[5]['end'];
	$point_hold2 = $conditions[5]['points'];
	//conditionHOLD3
	$start_hold3 = $conditions[6]['start'];
	$end_hold3   = $conditions[6]['end'];
	$point_hold3 = $conditions[6]['points'];
	//conditionHOLD4
	$start_hold4 = $conditions[7]['start'];
	$end_hold4   = $conditions[7]['end'];
	$point_hold4 = $conditions[7]['points'];

	if ($ath>$start_aht1 && $ath<$end_aht1) {
		$quantity_score += $point_aht1;
	}
	elseif ($ath>$start_aht2 && $ath<$end_aht2) {
		$quantity_score += $point_aht2;
	}
	elseif ($ath>$start_aht3 && $ath<$end_aht3) {
		$quantity_score += $point_aht3;
	}
	elseif ($ath>$start_aht4 && $ath<$end_aht4) {
		$quantity_score += $point_aht4;
	}

	//hold
	if ($hold<$end_hold1) {
		$quantity_score += $point_hold1;
	}
	elseif ($hold>$start_hold2 && $hold<$end_hold2) {
		$quantity_score += $point_hold2;
	}
	elseif ($hold>$start_hold3 && $hold<$end_hold3) {
		$quantity_score += $point_hold;
	}
	elseif ($hold>$start_hold4 && $hold<$end_hold4) {
		$quantity_score += $point_hold4;
	}
	/////////////////////////////////////////////////////
    
    //$quantity_score_bonus = $quantity_score + $bonus;
    $_SESSION['Team1BonusScoreRound']         = $bonus;	
	$_SESSION['Team1QuantityScoreRound']      = $quantity_score;
	$_SESSION['Team1QuantityScoreTotalRound'] = $quantity_score+$bonus;
    
    $_SESSION['Team1BonusTotal']    += $_SESSION['Team1BonusScoreRound'];	
	$_SESSION['Team1QuantityTotal'] += $_SESSION['Team1QuantityScoreRound'];
	$_SESSION['Team1Total']         += $_SESSION['Team1QuantityScoreTotalRound'];
    $_SESSION['RoundCompleate_team1'] = true;
    
    require_once '../lib/rounds.php';
    $_round = new Rounds();
    $fileds = array(
    	 0 =>  'quantity_round'.$_SESSION['Round'],
    	 1 =>  'bonus_round'.$_SESSION['Round']
    );
    $values = array(
    	0 =>  $quantity_score, 
    	1 =>  $bonus
    );
    $counter= count($values);
    $select = 'team';
    $id     = $team;
    $_round-> update($fileds,$values,$counter,$select,$id);

	header("Location: ../team1.php");
	}	
	
}

/////////////// Team 2 ///////////////////////////////////////////////

if (isset($_POST['saveRoundTeam2'])) 
{
	require_once '../lib/settings.php';
	require_once '../lib/counter.php';
	$_counter = new Counter();
	$_sett = new Setting();

	$sett = $_sett->get_roundData('type','taget_time_team2');
    $taget_time = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','taget_hold_team2');
    $taget_hold = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','n_rounds');
    $n_rounds = $sett[0]['value'];
	
	$ath   = $_POST['ath'];
	if ($ath < 60) {
		$_SESSION['RoundCompleate_team2'] == false;
		header("Location: ../team2.php");

	}
	else
	{
		$hold  = $_POST['hold'];
	$bonus = $_POST['number'];
	$quantity_score = 0;
	$quantity_score_bonus = 0;
	$team = "team2";	

	//time
	$conditions = $_counter->get_by_where1('team',$team);	
	//conditionAHT1
	$start_aht1 = $conditions[0]['start'];
	$end_aht1   = $conditions[0]['end'];
	$point_aht1 = $conditions[0]['points'];
	//conditionAHT2
	$start_aht2 = $conditions[1]['start'];
	$end_aht2   = $conditions[1]['end'];
	$point_aht2 = $conditions[1]['points'];
	//conditionAHT3
	$start_aht3 = $conditions[2]['start'];
	$end_aht3   = $conditions[2]['end'];
	$point_aht3 = $conditions[2]['points'];
	//conditionAHT4
	$start_aht4 = $conditions[3]['start'];
	$end_aht4   = $conditions[3]['end'];
	$point_aht4 = $conditions[3]['points'];
	/////////////////////////////////////////
	//conditionHOLD1
	$start_hold1 = $conditions[4]['start'];
	$end_hold1   = $conditions[4]['end'];
	$point_hold1 = $conditions[4]['points'];
	//conditionHOLD2
	$start_hold2 = $conditions[5]['start'];
	$end_hold2   = $conditions[5]['end'];
	$point_hold2 = $conditions[5]['points'];
	//conditionHOLD3
	$start_hold3 = $conditions[6]['start'];
	$end_hold3   = $conditions[6]['end'];
	$point_hold3 = $conditions[6]['points'];
	//conditionHOLD4
	$start_hold4 = $conditions[7]['start'];
	$end_hold4   = $conditions[7]['end'];
	$point_hold4 = $conditions[7]['points'];

	if ($ath>$start_aht1 && $ath<$end_aht1) {
		$quantity_score += $point_aht1;
	}
	elseif ($ath>$start_aht2 && $ath<$end_aht2) {
		$quantity_score += $point_aht2;
	}
	elseif ($ath>$start_aht3 && $ath<$end_aht3) {
		$quantity_score += $point_aht3;
	}
	elseif ($ath>$start_aht4 && $ath<$end_aht4) {
		$quantity_score += $point_aht4;
	}

	//hold
	if ($hold<$end_hold1) {
		$quantity_score += $point_hold1;
	}
	elseif ($hold>$start_hold2 && $hold<$end_hold2) {
		$quantity_score += $point_hold2;
	}
	elseif ($hold>$start_hold3 && $hold<$end_hold3) {
		$quantity_score += $point_hold;
	}
	elseif ($hold>$start_hold4 && $hold<$end_hold4) {
		$quantity_score += $point_hold4;
	}
	/////////////////////////////////////////////////////
    
    $quantity_score_bonus = $quantity_score + $bonus;
    $_SESSION['Team2BonusScoreRound']         = $bonus;	
	$_SESSION['Team2QuantityScoreRound']      = $quantity_score;
	$_SESSION['Team2QuantityScoreTotalRound'] = $quantity_score+$bonus;
    
    $_SESSION['Team2BonusTotal']    += $_SESSION['Team2BonusScoreRound'];	
	$_SESSION['Team2QuantityTotal'] += $_SESSION['Team2QuantityScoreRound'];
	$_SESSION['Team2Total']         += $_SESSION['Team2QuantityScoreTotalRound'];
    $_SESSION['RoundCompleate_team2'] = true;
    
    require_once '../lib/rounds.php';
    $_round = new Rounds();
    $fileds = array(
    	 0 =>  'quantity_round'.$_SESSION['Round'],
    	 1 =>  'bonus_round'.$_SESSION['Round']
    );
    $values = array(
    	0 =>  $quantity_score,
    	1 =>  $bonus
    );$counter= count($values);
    $select = 'team';
    $id     = $team;
    $_round-> update($fileds,$values,$counter,$select,$id);

	header("Location: ../team2.php");
	}
	
}

///////////////// Team 3 ///////////////////////////////////////
if (isset($_POST['saveRoundTeam3'])) 
{
	require_once '../lib/settings.php';
	require_once '../lib/counter.php';
	$_counter = new Counter();
	$_sett = new Setting();
	
	$sett = $_sett->get_roundData('type','taget_time_team3');
    $taget_time = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','taget_hold_team3');
    $taget_hold = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','n_rounds');
    $n_rounds = $sett[0]['value'];

	$ath   = $_POST['ath'];
	if ($ath < 60) {
		$_SESSION['RoundCompleate_team3'] == false;
		header("Location: ../team3.php");
	}
	else
	{
		$hold  = $_POST['hold'];
	$bonus = $_POST['number'];
	$quantity_score = 0;
	$quantity_score_bonus = 0;
	$team = "team3";



	

	$conditions = $_counter->get_by_where1('team',$team);	
	//conditionAHT1
	$start_aht1 = $conditions[0]['start'];
	$end_aht1   = $conditions[0]['end'];
	$point_aht1 = $conditions[0]['points'];
	//conditionAHT2
	$start_aht2 = $conditions[1]['start'];
	$end_aht2   = $conditions[1]['end'];
	$point_aht2 = $conditions[1]['points'];
	//conditionAHT3
	$start_aht3 = $conditions[2]['start'];
	$end_aht3   = $conditions[2]['end'];
	$point_aht3 = $conditions[2]['points'];
	//conditionAHT4
	$start_aht4 = $conditions[3]['start'];
	$end_aht4   = $conditions[3]['end'];
	$point_aht4 = $conditions[3]['points'];
	/////////////////////////////////////////
	//conditionHOLD1
	$start_hold1 = $conditions[4]['start'];
	$end_hold1   = $conditions[4]['end'];
	$point_hold1 = $conditions[4]['points'];
	//conditionHOLD2
	$start_hold2 = $conditions[5]['start'];
	$end_hold2   = $conditions[5]['end'];
	$point_hold2 = $conditions[5]['points'];
	//conditionHOLD3
	$start_hold3 = $conditions[6]['start'];
	$end_hold3   = $conditions[6]['end'];
	$point_hold3 = $conditions[6]['points'];
	//conditionHOLD4
	$start_hold4 = $conditions[7]['start'];
	$end_hold4   = $conditions[7]['end'];
	$point_hold4 = $conditions[7]['points'];

	if ($ath>$start_aht1 && $ath<$end_aht1) {
		$quantity_score += $point_aht1;
	}
	elseif ($ath>$start_aht2 && $ath<$end_aht2) {
		$quantity_score += $point_aht2;
	}
	elseif ($ath>$start_aht3 && $ath<$end_aht3) {
		$quantity_score += $point_aht3;
	}
	elseif ($ath>$start_aht4 && $ath<$end_aht4) {
		$quantity_score += $point_aht4;
	}

	//hold
	if ($hold<$end_hold1) {
		$quantity_score += $point_hold1;
	}
	elseif ($hold>$start_hold2 && $hold<$end_hold2) {
		$quantity_score += $point_hold2;
	}
	elseif ($hold>$start_hold3 && $hold<$end_hold3) {
		$quantity_score += $point_hold;
	}
	elseif ($hold>$start_hold4 && $hold<$end_hold4) {
		$quantity_score += $point_hold4;
	}
	/////////////////////////////////////////////////////
    
    $quantity_score_bonus = $quantity_score + $bonus;
    $_SESSION['Team3BonusScoreRound']         = $bonus;	
	$_SESSION['Team3QuantityScoreRound']      = $quantity_score;
	$_SESSION['Team3QuantityScoreTotalRound'] = $quantity_score+$bonus;
    
    $_SESSION['Team3BonusTotal']    += $_SESSION['Team3BonusScoreRound'];	
	$_SESSION['Team3QuantityTotal'] += $_SESSION['Team3QuantityScoreRound'];
	$_SESSION['Team3Total']         += $_SESSION['Team3QuantityScoreTotalRound'];
    $_SESSION['RoundCompleate_team3'] = true;
    
    require_once '../lib/rounds.php';
    $_round = new Rounds();
    $fileds = array(
    	 0 =>  'quantity_round'.$_SESSION['Round'],
    	 1 =>  'bonus_round'.$_SESSION['Round']
    );
    $values = array(
    	0 =>  $quantity_score, 
    	1 =>  $bonus
    );$counter= count($values);
    $select = 'team';
    $id     = $team;
    $_round-> update($fileds,$values,$counter,$select,$id);

	header("Location: ../team3.php");
	}
	
}

/////////////////// Team 4 //////////////////////////////////////////

if (isset($_POST['saveRoundTeam4'])) 
{
	require_once '../lib/settings.php';
	require_once '../lib/counter.php';
	$_counter = new Counter();
	$_sett = new Setting();
	
	$sett = $_sett->get_roundData('type','taget_time_team4');
    $taget_time = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','taget_hold_team4');
    $taget_hold = $sett[0]['value'];
    $sett =$_sett->get_roundData('type','n_rounds');
    $n_rounds = $sett[0]['value'];

	$ath   = $_POST['ath'];
	if ($ath < 60) {
		$_SESSION['RoundCompleate_team4'] == false;
		header("Location: ../team4.php");
	}
	else
	{
		$hold  = $_POST['hold'];
	$bonus = $_POST['number'];
	$quantity_score = 0;
	$quantity_score_bonus = 0;
	$team = "team4";



	

	$conditions = $_counter->get_by_where1('team',$team);	
	//conditionAHT1
	$start_aht1 = $conditions[0]['start'];
	$end_aht1   = $conditions[0]['end'];
	$point_aht1 = $conditions[0]['points'];
	//conditionAHT2
	$start_aht2 = $conditions[1]['start'];
	$end_aht2   = $conditions[1]['end'];
	$point_aht2 = $conditions[1]['points'];
	//conditionAHT3
	$start_aht3 = $conditions[2]['start'];
	$end_aht3   = $conditions[2]['end'];
	$point_aht3 = $conditions[2]['points'];
	//conditionAHT4
	$start_aht4 = $conditions[3]['start'];
	$end_aht4   = $conditions[3]['end'];
	$point_aht4 = $conditions[3]['points'];
	/////////////////////////////////////////
	//conditionHOLD1
	$start_hold1 = $conditions[4]['start'];
	$end_hold1   = $conditions[4]['end'];
	$point_hold1 = $conditions[4]['points'];
	//conditionHOLD2
	$start_hold2 = $conditions[5]['start'];
	$end_hold2   = $conditions[5]['end'];
	$point_hold2 = $conditions[5]['points'];
	//conditionHOLD3
	$start_hold3 = $conditions[6]['start'];
	$end_hold3   = $conditions[6]['end'];
	$point_hold3 = $conditions[6]['points'];
	//conditionHOLD4
	$start_hold4 = $conditions[7]['start'];
	$end_hold4   = $conditions[7]['end'];
	$point_hold4 = $conditions[7]['points'];

	if ($ath>$start_aht1 && $ath<$end_aht1) {
		$quantity_score += $point_aht1;
	}
	elseif ($ath>$start_aht2 && $ath<$end_aht2) {
		$quantity_score += $point_aht2;
	}
	elseif ($ath>$start_aht3 && $ath<$end_aht3) {
		$quantity_score += $point_aht3;
	}
	elseif ($ath>$start_aht4 && $ath<$end_aht4) {
		$quantity_score += $point_aht4;
	}

	//hold
	if ($hold<$end_hold1) {
		$quantity_score += $point_hold1;
	}
	elseif ($hold>$start_hold2 && $hold<$end_hold2) {
		$quantity_score += $point_hold2;
	}
	elseif ($hold>$start_hold3 && $hold<$end_hold3) {
		$quantity_score += $point_hold;
	}
	elseif ($hold>$start_hold4 && $hold<$end_hold4) {
		$quantity_score += $point_hold4;
	}
	/////////////////////////////////////////////////////
    
    $quantity_score_bonus = $quantity_score + $bonus;
    $_SESSION['Team4BonusScoreRound']         = $bonus;	
	$_SESSION['Team4QuantityScoreRound']      = $quantity_score;
	$_SESSION['Team4QuantityScoreTotalRound'] = $quantity_score+$bonus;
    
    $_SESSION['Team4BonusTotal']    += $_SESSION['Team4BonusScoreRound'];	
	$_SESSION['Team4QuantityTotal'] += $_SESSION['Team4QuantityScoreRound'];
	$_SESSION['Team4Total']         += $_SESSION['Team4QuantityScoreTotalRound'];
    $_SESSION['RoundCompleate_team4'] = true;
    
    require_once '../lib/rounds.php';
    $_round = new Rounds();
    $fileds = array(
    	 0 =>  'quantity_round'.$_SESSION['Round'],
    	 1 =>  'bonus_round'.$_SESSION['Round']
    );
    $values = array(
    	0 =>  $quantity_score, 
    	1 =>  $bonus
    );$counter= count($values);
    $select = 'team';
    $id     = $team;
    $_round-> update($fileds,$values,$counter,$select,$id);

	header("Location: ../team4.php");
	}
	
}



////////// Bonus Team 1 /////////////////
if (isset($_POST['add_bonus_team1'])) 
{
	$bonus = 10;
	require_once '../lib/rounds.php';
    $_round = new Rounds();
	/*
	
    $round = $_round->get_by_where1('team','team1');
    $currentBonusRound = 'bonus_round'.$_SESSION['Round'];
    $last_quality = $round[0][$currentBonusRound];
    $current_Bonus = $last_quality + $bonus;
    */
    //////////////////////////////////////////////////
    $_SESSION['Team1BonusTotal'] += $bonus; 
    $_SESSION['Team1BonusScoreRound'] += $bonus;
    //////////////////////////////////////////////////
    $fileds = array(0 =>  'bonus_round'.$_SESSION['Round']);
    $values = array(0 =>  $bonus );
    $counter= count($values);
    $select = 'team';
    $id     = 'team1';
    $_round->updateInc($fileds,$values,$counter,$select,$id);
    header("Location: ../team1.php");
}

///////////// Bonus Team 2 //////////////////////
if (isset($_POST['add_bonus_team2'])) 
{
	$bonus = 10;
	require_once '../lib/rounds.php';
    $_round = new Rounds();
	/*
	
    $round = $_round->get_by_where1('team','team1');
    $currentBonusRound = 'bonus_round'.$_SESSION['Round'];
    $last_quality = $round[0][$currentBonusRound];
    $current_Bonus = $last_quality + $bonus;
    */
    //////////////////////////////////////////////////
    $_SESSION['Team2BonusTotal'] += $bonus; 
    $_SESSION['Team2BonusScoreRound'] += $bonus;
    //////////////////////////////////////////////////
    $fileds = array(0 =>  'bonus_round'.$_SESSION['Round']);
    $values = array(0 =>  $bonus );
    $counter= count($values);
    $select = 'team';
    $id     = 'team2';
    $_round->updateInc($fileds,$values,$counter,$select,$id);
    header("Location: ../team2.php");
}

///////// Bonus Team 3 ////////////////
if (isset($_POST['add_bonus_team3'])) 
{
	$bonus = 10;
	require_once '../lib/rounds.php';
    $_round = new Rounds();
	/*
	
    $round = $_round->get_by_where1('team','team1');
    $currentBonusRound = 'bonus_round'.$_SESSION['Round'];
    $last_quality = $round[0][$currentBonusRound];
    $current_Bonus = $last_quality + $bonus;
    */
    //////////////////////////////////////////////////
    $_SESSION['Team3BonusTotal'] += $bonus; 
    $_SESSION['Team3BonusScoreRound'] += $bonus;
    //////////////////////////////////////////////////
    $fileds = array(0 =>  'bonus_round'.$_SESSION['Round']);
    $values = array(0 =>  $bonus );
    $counter= count($values);
    $select = 'team';
    $id     = 'team3';
    $_round->updateInc($fileds,$values,$counter,$select,$id);
    header("Location: ../team3.php");
}


/////// Bonus Team 4 //////////////////

if (isset($_POST['add_bonus_team4'])) 
{
	$bonus = 10;
	require_once '../lib/rounds.php';
    $_round = new Rounds();
	/*
	
    $round = $_round->get_by_where1('team','team1');
    $currentBonusRound = 'bonus_round'.$_SESSION['Round'];
    $last_quality = $round[0][$currentBonusRound];
    $current_Bonus = $last_quality + $bonus;
    */
    //////////////////////////////////////////////////
    $_SESSION['Team1BonusTotal'] += $bonus; 
    $_SESSION['Team4BonusScoreRound'] += $bonus;
    //////////////////////////////////////////////////
    $fileds = array(0 =>  'bonus_round'.$_SESSION['Round']);
    $values = array(0 =>  $bonus );
    $counter= count($values);
    $select = 'team';
    $id     = 'team4';
    $_round->updateInc($fileds,$values,$counter,$select,$id);
    header("Location: ../team4.php");
}

////////////////////////////////////////////////////

if (isset($_POST['counter_aht_condition'])) 
{
	if (isset($_GET['condition'])) 
	{
		require_once '../lib/counter.php';
		$_counter = new Counter();
		$conditionNumber = $_GET['condition'];
		$start  = $_POST['aht_start'];
		$end    = $_POST['aht_end'];
		$team    = $_POST['team'];
		if ($end < $start) 
		{
			header("Location: ../counter_settings.php?team=$team");
		}
		else{
			$points = $_POST['aht_points'];
		    $fileds = array(
			        0 => 'end',
			        1 => 'points'
			      );
		    $values = array(
			        0 => $end,
			        1 => $points
			      );
		    $counter= count($fileds);
		    $where = "team='team$team' and conditionType='aht' and conditionNumber='$conditionNumber'";
		    $_counter->updateWhere($fileds,$values,$counter,$where);

		    $fileds = array(
			        0 => 'start',
			      );
		    $new_start = $end+1;
		    $new_cond  = $conditionNumber+1;
		    $values = array(
			        0 => $new_start,
			      );
		    $counter= count($fileds);
		    if ($new_cond > 4) {
		    	header("Location: ../counter_settings.php?team=$team");
		    }
		    else{
		    	$where = "team='team$team' and conditionType='aht' and conditionNumber='$new_cond'";
		        $_counter->updateWhere($fileds,$values,$counter,$where);
		        header("Location: ../counter_settings.php?team=$team");
		    }
		    
		}
	}
}


if (isset($_POST['counter_hold_condition'])) 
{
	if (isset($_GET['condition'])) 
	{
		require_once '../lib/counter.php';
		$_counter = new Counter();

		$conditionNumber = $_GET['condition'];
		$start   = $_POST['hold_start'];
		$end     = $_POST['hold_end'];
		$team    = $_POST['team'];
		if ($end < $start) 
		{
			header("Location: ../counter_settings.php?team=$team");
		}
		else{
			$points = $_POST['hold_points'];
		    $fileds = array(
			        0 => 'end',
			        1 => 'points'
			      );
		    $values = array(
			        0 => $end,
			        1 => $points
			      );
		    $counter= count($fileds);
		    $where = "team='team$team' and conditionType='hold' and conditionNumber='$conditionNumber'";
		    $_counter->updateWhere($fileds,$values,$counter,$where);

		    $fileds = array(
			        0 => 'start',
			      );
		    $new_start = $end+1;
		    $new_cond  = $conditionNumber+1;
		    $values = array(
			        0 => $new_start,
			      );
		    $counter= count($fileds);
		    if ($new_cond > 4) {
		    	header("Location: ../counter_settings.php?team=$team");
		    }
		    else{
		    	$where = "team='team$team' and conditionType='hold' and conditionNumber='$new_cond'";
		        $_counter->updateWhere($fileds,$values,$counter,$where);
		        header("Location: ../counter_settings.php?team=$team");
		    }
		    
		}
	}
}


if(isset($_GET['reset'])) 
{
	if($_GET['reset'] == 'counters') 
	{
	   require_once '../lib/rounds.php';
$_rounds = new Rounds();
$fileds = array(
	       0 =>'quality_round1',
	       1 =>'quality_round2',
	       2 =>'quality_round3',
	       3 =>'quality_round4',
	       4 =>'quality_round5',
	       5 =>'quality_round6',
	       6 =>'quality_round7',
	       7 =>'quality_round8',
	       8 =>'quality_round9',
	       9 =>'quality_round10',
	       10 =>'quality_round11',
	       11 =>'quality_round12',
	       12 =>'quality_round13',
	       13 =>'quality_round14',
	       14 =>'quality_round15',
	       15 =>'quantity_round1',
	       16 =>'quantity_round2',
	       17 =>'quantity_round3',
	       18 =>'quantity_round4',
	       19 =>'quantity_round5',
	       20 =>'quantity_round6',
	       21 =>'quantity_round7',
	       22 =>'quantity_round8',
	       23 =>'quantity_round9',
	       24 =>'quantity_round10',
	       25 =>'quantity_round11',
	       26 =>'quantity_round12',
	       27 =>'quantity_round13',
	       28 =>'quantity_round14',
	       29 =>'quantity_round15',
	       30 =>'bonus_round1',
	       31 =>'bonus_round2',
	       32 =>'bonus_round3',
	       33 =>'bonus_round4',
	       34 =>'bonus_round5',
	       35 =>'bonus_round6',
	       36 =>'bonus_round7',
	       37 =>'bonus_round8',
	       38 =>'bonus_round9',
	       39 =>'bonus_round10',
	       40 =>'bonus_round11',
	       41 =>'bonus_round12',
	       42 =>'bonus_round13',
	       43 =>'bonus_round14',
	       44 =>'bonus_round15'
	      );
$values = array(
	       0 => 0,
	       1 => 0,
	       2 => 0,
	       3 => 0,
	       4 => 0,
	       5 => 0,
	       6 => 0,
	       7 => 0,
	       8 => 0,
	       9 => 0,
	       10 => 0,
	       11 => 0,
	       12 => 0,
	       13 => 0,
	       14 => 0,
	       15 => 0,
	       16 => 0,
	       17 => 0,
	       18 => 0,
	       19 => 0,
	       20 => 0,
	       21 => 0,
	       22 => 0,
	       23 => 0,
	       24 => 0,
	       25 => 0,
	       26 => 0,
	       27 => 0,
	       28 => 0,
	       29 => 0,
	       30 => 0,
	       31 => 0,
	       32 => 0,
	       33 => 0,
	       34 => 0,
	       35 => 0,
	       36 => 0,
	       37 => 0,
	       38 => 0,
	       39 => 0,
	       40 => 0,
	       41 => 0,
	       42 => 0,
	       43 => 0,
	       44 => 0
	      );
$counter = count($fileds);
$select  = 'team';
$id      = 'team1';
$_rounds->update($fileds,$values,$counter,$select,$id);

$select  = 'team';
$id      = 'team2';
$_rounds->update($fileds,$values,$counter,$select,$id);

$select  = 'team';
$id      = 'team3';
$_rounds->update($fileds,$values,$counter,$select,$id);

$select  = 'team';
$id      = 'team4';
$_rounds->update($fileds,$values,$counter,$select,$id);
$_SESSION['Round'] = 1;
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

       header("Location: ../counter.php");	
	}
	else{
		header("Location: ../index.php");
	}
}




?>

<? ob_flush(); ?>