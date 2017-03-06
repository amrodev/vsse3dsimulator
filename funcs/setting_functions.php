<?php  
ob_start();
?>
<?php 
//$_SESSION['User_message']
session_start();

$_SESSION['Team1QualityScoreRound'] = 0;
$_SESSION['Team1QualityTotal']      = 0;
$_SESSION['RoundQualityCompleate']  = false;
require('../lib/settings.php');
  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['submit_settings']))
  { 
    $_setting = new Setting();
    $target_ath_team1  = $_POST['target_ath_team1'];
    $target_ath_team2  = $_POST['target_ath_team2'];
    $target_ath_team3  = $_POST['target_ath_team3'];
    $target_ath_team4  = $_POST['target_ath_team4'];
    $target_hold_team1 = $_POST['target_hold_team1'];
    $target_hold_team2 = $_POST['target_hold_team2'];
    $target_hold_team3 = $_POST['target_hold_team3'];
    $target_hold_team4 = $_POST['target_hold_team4'];
    $n_rounds = $_POST['n_rounds'];
    $n_teams  = $_POST['n_teams'];

    
    // Team 1 //////////////////////////////////////////////////
    $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_ath_team1
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_time_team1';
    $_setting->update($fileds,$values,$counter,$select,$id);
     $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_hold_team1
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_hold_team1';
    $_setting->update($fileds,$values,$counter,$select,$id);

    // Team 2 //////////////////////////////////////////////////
    $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_ath_team2
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_time_team2';
    $_setting->update($fileds,$values,$counter,$select,$id);
     $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_hold_team2
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_hold_team2';
    $_setting->update($fileds,$values,$counter,$select,$id);

    // Team 3 //////////////////////////////////////////////////
    $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_ath_team3
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_time_team3';
    $_setting->update($fileds,$values,$counter,$select,$id);
     $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_hold_team3
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_hold_team3';
    $_setting->update($fileds,$values,$counter,$select,$id);

    // Team 4 //////////////////////////////////////////////////
    $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_ath_team4
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_time_team4';
    $_setting->update($fileds,$values,$counter,$select,$id);
     $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $target_hold_team4
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'taget_hold_team4';
    $_setting->update($fileds,$values,$counter,$select,$id);


     $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $n_rounds
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'n_rounds';
    $_setting->update($fileds,$values,$counter,$select,$id);


    $fileds = array(
         0 => 'value'
      );
    $values = array(
         0 => $n_teams
      );
    $counter = count($fileds);
    $select = 'type';
    $id     = 'n_teams';
    $_setting->update($fileds,$values,$counter,$select,$id);


    //update condithions
    //$target_ath_team1 , $target_hold_team1 
    //calcAHT($conditionNumber,$start,$end,$team,$points);
    
    ////////////// team1 ////////////////////////////////////////////
    $start1_aht  = 60;
    $end_aht1    = $target_ath_team1;
    $start_aht2  = $end_aht1+1;
    $end_aht2    = ($target_ath_team1*20)/100+($target_ath_team1);    
    $start_aht3  = $end_aht2+1;
    $end_aht3    = ($target_ath_team1*40)/100+($target_ath_team1);
    $start_aht4  = $end_aht3+1;
    $end_aht4    = 5000;    
    calcAHT(1  ,60,$end_aht1,'1',50);
    calcAHT(2  ,$end_aht2,$end_aht2,'1',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'1',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'1',0);
    
    $start1_hold  = 0;
    $end_hold1    = $target_hold_team1;
    $start_hold2  = $end_hold1+1;
    $end_hold2    = ($target_hold_team1*20)/100+($target_hold_team1);    
    $start_hold3  = $end_hold2+1;
    $end_hold3    = ($target_hold_team1*40)/100+($target_hold_team1);
    $start_hold4  = $end_hold3+1;
    $end_hold4    = 5000;
    calcHOLD(1  ,0,$end_hold1,'1',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'1',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'1',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'1',0);
    ////////////// team2 ////////////////////////////////////////////
    $start1_aht  = 60;
    $end_aht1    = $target_ath_team2;
    $start_aht2  = $end_aht1+1;
    $end_aht2    = ($target_ath_team2*20)/100+($target_ath_team2);    
    $start_aht3  = $end_aht2+1;
    $end_aht3    = ($target_ath_team2*40)/100+($target_ath_team2);
    $start_aht4  = $end_aht3+1;
    $end_aht4    = 5000;    
    calcAHT(1  ,60,$end_aht1,'2',50);
    calcAHT(2  ,$start_aht2,$end_aht2,'2',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'2',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'2',0);
    $start1_hold  = 0;
    $end_hold1    = $target_hold_team2;
    $start_hold2  = $end_hold1+1;
    $end_hold2    = ($target_hold_team2*20)/100+($target_hold_team2);    
    $start_hold3  = $end_hold2+1;
    $end_hold3    = ($target_hold_team2*40)/100+($target_hold_team2);
    $start_hold4  = $end_hold3+1;
    $end_hold4    = 5000;
    calcHOLD(1  ,0,$end_hold1,'2',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'2',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'2',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'2',0);
    ////////////// team3 ////////////////////////////////////////////
    $start1_aht  = 60;
    $end_aht1    = $target_ath_team3;
    $start_aht2  = $end_aht1+1;
    $end_aht2    = ($target_ath_team3*20)/100+($target_ath_team3);    
    $start_aht3  = $end_aht2+1;
    $end_aht3    = ($target_ath_team3*40)/100+($target_ath_team3);
    $start_aht4  = $end_aht3+1;
    $end_aht4    = 5000;    
    calcAHT(1  ,60,$end_aht1,'3',50);
    calcAHT(2  ,$start_aht2,$end_aht2,'3',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'3',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'3',0);
    $start1_hold  = 0;
    $end_hold1    = $target_hold_team3;
    $start_hold2  = $end_hold1+1;
    $end_hold2    = ($target_hold_team3*20)/100+($target_hold_team3);    
    $start_hold3  = $end_hold2+1;
    $end_hold3    = ($target_hold_team3*40)/100+($target_hold_team3);
    $start_hold4  = $end_hold3+1;
    $end_hold4    = 5000;
    calcHOLD(1  ,0,$end_hold1,'3',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'3',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'3',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'3',0);
    ////////////// team4 ////////////////////////////////////////////
    $start1_aht  = 60;
    $end_aht1    = $target_ath_team4;
    $start_aht2  = $end_aht1+1;
    $end_aht2    = ($target_ath_team4*20)/100+($target_ath_team4);    
    $start_aht3  = $end_aht2+1;
    $end_aht3    = ($target_ath_team4*40)/100+($target_ath_team4);
    $start_aht4  = $end_aht3+1;
    $end_aht4    = 5000;    
    calcAHT(1  ,60,$end_aht1,'4',50);
    calcAHT(2  ,$start_aht2,$end_aht2,'4',25);
    calcAHT(3  ,$start_aht3,$end_aht3,'4',15);
    calcAHT(4  ,$start_aht4,$end_aht4,'4',0);
    $start1_hold  = 0;
    $end_hold1    = $target_hold_team4;
    $start_hold2  = $end_hold1+1;
    $end_hold2    = ($target_hold_team4*20)/100+($target_hold_team4);    
    $start_hold3  = $end_hold2+1;
    $end_hold3    = ($target_hold_team4*40)/100+($target_hold_team4);
    $start_hold4  = $end_hold3+1;
    $end_hold4    = 5000;
    calcHOLD(1  ,0,$end_hold1,'4',50);
    calcHOLD(2  ,$start_hold2,$end_hold2,'4',25);
    calcHOLD(3  ,$start_hold3,$end_hold3,'4',15);
    calcHOLD(4  ,$start_hold4,$end_hold4,'4',0);
    /////////////////////////////////////////////////////////////////

    header("Location: ../settings.php");   
  }





//// funcs //////////////////////////////////////////////////////
/////////// AHT Conditions //////////////////////////////////////
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
/////// Image Updates ///////////////////////////////////////////////  
if (isset($_POST['update_logo'])) 
{
     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $rand_dir_name = substr(str_shuffle($chars), 0, 15);
     mkdir("../images/uploads/$rand_dir_name");
     
     move_uploaded_file(@$_FILES["fileToUpload"]["tmp_name"],"../images/uploads/$rand_dir_name/".$_FILES["fileToUpload"]["name"]);
     $pic_name = @$_FILES["fileToUpload"]["name"];
     $pic = 'images/uploads/'.$rand_dir_name.'/'.$_FILES["fileToUpload"]["name"];
     
     $_setting = new Setting();
     $fileds = array(
                0 => 'value'
               );
     $values = array(
                0 => $pic
               );
     $_setting->update($fileds,$values,1,'type','logo');
     
     header("Location: ../images_settings.php");
}

if (isset($_POST['update_background'])) 
{
     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $rand_dir_name = substr(str_shuffle($chars), 0, 15);
     mkdir("../images/uploads/$rand_dir_name");
     
     move_uploaded_file(@$_FILES["bgfile"]["tmp_name"],"../images/uploads/$rand_dir_name/".$_FILES["bgfile"]["name"]);
     $pic_name = @$_FILES["bgfile"]["name"];
     $pic = 'images/uploads/'.$rand_dir_name.'/'.$_FILES["bgfile"]["name"];
     
     $_setting = new Setting();
     $fileds = array(
                0 => 'value'
               );
     $values = array(
                0 => $pic
               );
     $_setting->update($fileds,$values,1,'type','background');
     
     header("Location: ../images_settings.php");
}


  
  

?>

<? ob_flush(); ?>