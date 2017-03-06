<?php 
ob_start();
session_start();

// 1 Reset Sessions ///////////////////////////////////////////////////
unset($_SESSION['Round']);
unset($_SESSION['RoundCompleate_team1']);
unset($_SESSION['RoundCompleate_team2']);
unset($_SESSION['RoundCompleate_team3']);
unset($_SESSION['RoundCompleate_team4']);
unset($_SESSION['RoundQualityCompleate']);
unset($_SESSION['Team1BonusScoreRound']);
unset($_SESSION['Team1QuantityScoreRound']);
unset($_SESSION['Team1QuantityScoreTotalRound']);
unset($_SESSION['Team1QualityScoreRound']);
unset($_SESSION['Team2BonusScoreRound']);
unset($_SESSION['Team2QuantityScoreRound']);
unset($_SESSION['Team2QuantityScoreTotalRound']);
unset($_SESSION['Team2QualityScoreRound']);
unset($_SESSION['Team3BonusScoreRound']);
unset($_SESSION['Team3QuantityScoreRound']);
unset($_SESSION['Team3QuantityScoreTotalRound']);
unset($_SESSION['Team3QualityScoreRound']);
unset($_SESSION['Team4BonusScoreRound']);
unset($_SESSION['Team4QuantityScoreRound']);
unset($_SESSION['Team4QuantityScoreTotalRound']);
unset($_SESSION['Team4QualityScoreRound']);
unset($_SESSION['Team1BonusTotal']);
unset($_SESSION['Team1QuantityTotal']);
unset($_SESSION['Team1Total']);
unset($_SESSION['Team1QualityTotal']);
unset($_SESSION['Team2BonusTotal']);
unset($_SESSION['Team2QuantityTotal']);
unset($_SESSION['Team2Total']);
unset($_SESSION['Team2QualityTotal']);
unset($_SESSION['Team3BonusTotal']);
unset($_SESSION['Team3QuantityTotal']);
unset($_SESSION['Team3Total']);
unset($_SESSION['Team3QualityTotal']);
unset($_SESSION['Team4BonusTotal']);
unset($_SESSION['Team4QuantityTotal']);
unset($_SESSION['Team4Total']);
unset($_SESSION['Team4QualityTotal']);
unset($_SESSION['Team1TotalRound']);
unset($_SESSION['RoundQualityCompleate_team1']);
unset($_SESSION['RoundQualityCompleate_team2']);
unset($_SESSION['RoundQualityCompleate_team3']);
unset($_SESSION['RoundQualityCompleate_team4']);
///////////////////////////////////////////////////////////////////////


// 2 Reset Defult settings ////////////////////////////////////////////
require_once '../lib/settings.php';
$default_ath    = 300;
$default_hold   = 30; 
$default_rounds = 5;
$_setting = new Setting();

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_ath
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_time_team1';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_ath
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_time_team2';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_ath
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_time_team3';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_ath
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_time_team4';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_hold
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_hold_team1';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_hold
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_hold_team2';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_hold
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_hold_team3';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_hold
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'taget_hold_team4';
$_setting->update($fileds,$values,$counter,$select,$id);

$fileds = array(
	       0 =>'value'
	      );
$values = array(
	       0 => $default_rounds
	      );
$counter = count($fileds);
$select  = 'type';
$id      = 'n_rounds';
$_setting->update($fileds,$values,$counter,$select,$id);
///////////////////////////////////////////////////////////////////////


// 3 Reset Rounds /////////////////////////////////////////////////////
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
///////////////////////////////////////////////////////////////////////


//4 reset conditions 
    $start1_aht  = 60;
    $end_aht1    = 300;
    $start_aht2  = $end_aht1+1;
    $end_aht2    = (300*20)/100+(300);    
    $start_aht3  = $end_aht2+1;
    $end_aht3    = (300*40)/100+(300);
    $start_aht4  = $end_aht3+1;
    $end_aht4    = 5000;
    $start1_hold  = 0;
    $end_hold1    = 30;
    $start_hold2  = $end_hold1+1;
    $end_hold2    = (30*20)/100+(30);    
    $start_hold3  = $end_hold2+1;
    $end_hold3    = (30*40)/100+(30);
    $start_hold4  = $end_hold3+1;
    $end_hold4    = 5000;
    // team 1
    calcAHT(1  ,60,$end_aht1,'1',50);
    calcAHT(2  ,$end_aht2,$end_aht2,'1',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'1',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'1',0);
    calcHOLD(1  ,0,$end_hold1,'1',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'1',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'1',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'1',0);
    // team 2
    calcAHT(1  ,60,$end_aht1,'2',50);
    calcAHT(2  ,$end_aht2,$end_aht2,'2',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'2',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'2',0);
    calcHOLD(1  ,0,$end_hold1,'2',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'2',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'2',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'2',0);
    // team 3
    calcAHT(1  ,60,$end_aht1,'3',50);
    calcAHT(2  ,$end_aht2,$end_aht2,'3',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'3',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'3',0);
    calcHOLD(1  ,0,$end_hold1,'3',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'3',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'3',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'3',0);
    // team 4
    calcAHT(1  ,60,$end_aht1,'4',50);
    calcAHT(2  ,$end_aht2,$end_aht2,'4',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'4',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'4',0);
    calcHOLD(1  ,0,$end_hold1,'4',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'4',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'4',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'4',0);

    function calcAHT($conditionNumber,$start,$end,$team,$points)
{
    require_once '../lib/counter.php';
    $_counter = new Counter();
    
    if ($end < $start) 
    {
      //header("Location: ../counter_settings.php?team=$team");
    }
    else{
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
        }
        else{
          $where = "team='team$team' and conditionType='aht' and conditionNumber='$new_cond'";
            $_counter->updateWhere($fileds,$values,$counter,$where);
        }
        
    }
}  
/////////////////////////////////////////////////////////////////

/////////// HOLD Conditions //////////////////////////////////////
function calcHOLD($conditionNumber,$start,$end,$team,$points)
{
  require_once '../lib/counter.php';
    $_counter = new Counter();

    if ($end < $start) 
    {
    }
    else{
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
        }
        else{
          $where = "team='team$team' and conditionType='hold' and conditionNumber='$new_cond'";
            $_counter->updateWhere($fileds,$values,$counter,$where);
        }
        
    }
} 
///////////////////////////////////////////////////////////////// 

header("Location: ../settings.php");
?>