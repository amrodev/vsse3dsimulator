<? 
ob_start();


?>
<?php 
//$_SESSION['User_message']
session_start();

$_SESSION['Team1QualityScoreRound'] = 0;
$_SESSION['Team1QualityTotal']      = 0;
$_SESSION['RoundQualityCompleate']  = false;
  require('../lib/questions.php');
  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['add_question']))
  {     
     $_ques = new Questions();
     
     $catname     = $_POST['catname'];
     $subcat     = $_POST['subcat'];
     $question     = $_POST['question'];
     $r1  = $_POST['r1'];
     $r2  = $_POST['r2'];
     $r3  = $_POST['r3'];
     $r4  = $_POST['r4'];
     $r5  = $_POST['r5'];
     $r6  = $_POST['r6'];
     $r7  = $_POST['r7'];
     $r8  = $_POST['r8'];
     $r9  = $_POST['r9'];
     $r10 = $_POST['r10'];
     $r11 = $_POST['r11'];
     $r12 = $_POST['r12'];
     $r13 = $_POST['r13'];
     $r14 = $_POST['r14'];
     $r15 = $_POST['r15'];
     $r16 = $_POST['r16'];
     $r17 = $_POST['r17'];
     $r18 = $_POST['r18'];
     $r19 = $_POST['r19'];
     $r20 = $_POST['r20'];
     $_ques->save(null,$question,$catname,$r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10 ,$r11,$r12,$r13,$r14,$r15,$subcat,$r16,$r17,$r18,$r19,$r20);
     header("Location: ../new_question.php");      
     
  }

  if (isset($_POST['update_question'])) 
  {
     $_ques = new Questions();

     $question     = $_POST['question'];
     $r1  = $_POST['r1'];
     $r2  = $_POST['r2'];
     $r3  = $_POST['r3'];
     $r4  = $_POST['r4'];
     $r5  = $_POST['r5'];
     $r6  = $_POST['r6'];
     $r7  = $_POST['r7'];
     $r8  = $_POST['r8'];
     $r9  = $_POST['r9'];
     $r10 = $_POST['r10'];
     $r11 = $_POST['r11'];
     $r12 = $_POST['r12'];
     $r13 = $_POST['r13'];
     $r14 = $_POST['r14'];
     $r15 = $_POST['r15'];
     $r16 = $_POST['r16'];
     $r17 = $_POST['r17'];
     $r18 = $_POST['r18'];
     $r19 = $_POST['r19'];
     $r20 = $_POST['r20'];
     $fileds = array(
                 0 => 'question',
                 1 => 'round1',
                 2 => 'round2',
                 3 => 'round3',
                 4 => 'round4',
                 5 => 'round5',
                 6 => 'round6',
                 7 => 'round7',
                 8 => 'round8',
                 9 => 'round9',
                 10 => 'round10',
                 11 => 'round11',
                 12 => 'round12',
                 13 => 'round13',
                 14 => 'round14',
                 15 => 'round15',
                 16 => 'round16',
                 17 => 'round17',
                 18 => 'round18',
                 19 => 'round19',
                 20 => 'round20'
               );
     $values = array(
                0 => $question,
                1 => $r1,
                2 => $r2,
                3 => $r3,
                4 => $r4,
                5 => $r5,
                6 => $r6,
                7 => $r7,
                8 => $r8,
                9 => $r9,
                10 => $r10,
                11 => $r11,
                12 => $r12,
                13 => $r13,
                14 => $r14,
                15 => $r15,
                16 => $r16,
                17 => $r17,
                18 => $r18,
                19 => $r19,
                20 => $r20
               );
     $counter = count($values);
     $select = 'id';
     $id     = $_POST['id'];
     $_ques->update($fileds,$values,$counter,$select,$id);
     header("Location: ../questions_settings.php");
  }

  if (isset($_GET['qdel'])) 
  {
    $_questions = new Questions();
    $id  = $_GET['qdel'];
    $_questions->delete($id);
    header("Location: ../questions_settings.php");
  }

  if (isset($_POST['submit_questions'])) {
    
    $_questions = new Questions();
    $round = $_GET['qround'];
    $team  = $_GET['team'];
    $questions = $_questions->get_by_round('round'.$round);
    $quality_score = 0;

    for ($i=0; $i <count($questions) ; $i++) { 
      $ques_id = $questions[$i]['id'];
      $ques = $_questions->get_questionData('id',$ques_id);
      $ques_mark = $ques[0]['round'.$round];
      if ($_POST[$ques_id] == 'e') {
        $quality_score += $ques_mark;
      }
      elseif ($_POST[$ques_id] == 'a') {
        $quality_score += $ques_mark/2;
      }
      elseif ($_POST[$ques_id] == 'p') {
        $quality_score += 0;
      }
    }
  $_SESSION[$team.'QualityScoreRound'] += $quality_score;
  $_SESSION[$team.'QualityTotal'] = 0;
  $_SESSION[$team.'QualityTotal'] += $_SESSION[$team.'QualityScoreRound'];
  
  
  //$_SESSION['RoundQualityCompleate_team4']
  $_SESSION['RoundQualityCompleate_'.$team] = true;
  //echo 'Session 1 '.$_SESSION['RoundQualityCompleate_team1'];
  //echo 'Session 1 '.$_SESSION['RoundQualityCompleate_'.$team];
  $_SESSION['QualityMessage'.$team] = "Quality Evaluation is finished";
  require_once '../lib/rounds.php';
  $_round = new Rounds();
  $fileds = array(0 =>  'quality_round'.$round );
  $values = array(0 =>  $quality_score );
  $counter= count($values);
  $select = 'team';
  $id     = $team;
  $_round->update($fileds,$values,$counter,$select,$id); 
  $next_round = $round+1;
  header("Location: ../questions.php?round=".$next_round."&team=".$team);  
  }

  ////////////////////////////
  if (isset($_POST['newcat'])) 
  {
    $_ques = new Questions();
    $catname = $_POST['catname'];
    $_ques->save_cat(null,$catname);
    header("Location: ../questions_cats.php"); 
  }
  //////////////////////////////////////

  if (isset($_POST['newsubcat'])) {
    $_ques = new Questions();
    $catname = $_POST['catname'];
    $subcat = $_POST['subcat'];
    $_ques->save_subcat(null,$catname,$subcat);
    header("Location: ../questions_cats.php"); 
  }

  if (isset($_POST['delcat'])) 
  {
     $_ques = new Questions();
     $catid = "'".$_POST['catid']."'";
     $_ques->deleteCat($catid);
     header("Location: ../questions_cats.php");
  }
  

?>

<? ob_flush(); ?>