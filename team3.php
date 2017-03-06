<?php ob_start(); ?>
<?php 
session_start();
if (isset($current_quality)) {
  # code...
}
else{
  $current_quality = 0;
}

  require_once 'lib/rounds.php';
  $_r = new Rounds();
  $r_quantity  = $_r->get_by_where1('team','team3');
  $round = 'quantity_round'.$_SESSION['Round'];
  $current_quantity = $r_quantity[0]['quality_round1'];

  require_once 'lib/database.php';
  $_db = new Database();
  $q = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15) FROM rounds WHERE team = 'team3'";
  $_sum = $_db->get_by_query($q);
  $TotalQuality = $_sum[0][0];
  //////////////////////////////
  $q = "SELECT SUM(quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15) FROM rounds WHERE team = 'team3'";
  $_sum = $_db->get_by_query($q);
  $TotalQuantity = $_sum[0][0];
  //////////////////////////////////////
  $q = "SELECT SUM(bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team3'";
  $_sum = $_db->get_by_query($q);
  $TotalBonus = $_sum[0][0];
  ////////////////////////////////////////////
  $TotalRound = $TotalQuality + $TotalQuantity + $TotalBonus;

?>
<!DOCTYPE html>
<html>
<head>
  <title>Vodafone 3D Simulator </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
   <script src="js/timer_team3.js"></script>
   <script>
    function ajaxCall() {
      $.ajax({
         url: "sessions_team3.php", 
         success: (function (result) {
             $("#div1").html(result);
         })
      })
    };
ajaxCall(); // To output when the page loads
setInterval(ajaxCall, (2 * 1000)); // x * 1000 to get it in seconds
</script>
</head>
  <style>
   body{
    font-family:"Calibri";
   }

   </style>
<body>

<div style=" background-color: #eff4ff; background-color: #eff4ff;
    border: #037fdb;
    border-radius: 15px;
    height: 285px;
    border-style: groove;
    padding-left:1px;">
    <h2 style="    color: #ffffff;
    background-color: #037fdb;
    width: 40%;
    margin-left: 30%;
    align-items: center;     border: 1px solid transparent;
    border-radius: 4px;" align="center">Team 3</h2>


<div style="float:left; padding-left: 20px;     margin-top: 20px;">

<form name="saveRoundTeam3" method="post" action="funcs/counter_functions2.php">
<?php 

 if ( $_SESSION['RoundCompleate_team3']== true) {
  $_r = new Rounds();
  $r  = $_r->get_by_where1('team','team3');
  $round = 'quality_round'.$_SESSION['Round'];
  $current_quality = $r[0][$round];
  echo '<div id="div1"></div>';
     echo '<form action="counter_functions2.php" name="add_bonus_team3" method="post" >';
        echo '<h4 style=" max-width: 230px;"><input hidden="true" type="text" id="number"  name="number" value="0" style="background: #eff4ff; width:10%; border-style: none; text-align: right;"></h4>';
        echo '<Button name="add_bonus_team3" id="button-start_hold" style="font-weight: 700; 
      background-color: #feff13; color: #f90707; " class="btn " 
      onclick="incrementValue()">BONUS</Button>';
        echo '</form>';
 
        
        
    
  }
  else{
    echo '<div class="wrapper"   style="float:left;">
      <a id="button-start" style="margin-right: 10px; margin-top: -12px;" class="btn btn-success">Start</a>
      <button name="saveRoundTeam3" style=" margin-right: 10px;margin-top: -12px;" onclick="getTime()"  class="btn btn-warning">Stop</button>
      
      <a id="button-reset"  class="btn btn-danger" style=" margin-right: 10px;margin-right:30px; margin-top: -12px;">Reset</a>
      
      
      


      <span style="font-size:30px; color:red; margin-right:30px;" id="">AHT</span> 
      <span id="seconds" style="font-size:30px; ">00</span>
      <span style="font-size:0px; color: #eff4ff;" id="tens">00</span>
    </div> 
    <br><br><br><br>
    <div class="wrapper">
      <a id="button-start_hold" style="margin-right: 10px; margin-top: -12px" class="btn btn-success">Start </a>
      <a id="button-stop_hold" style=" margin-right: 10px;margin-top: -12px"  class="btn btn-warning">Stop </a>
      <a id="button-reset_hold" class="btn btn-danger" style=" margin-right: 10px;margin-right:30px; margin-top: -12px">Reset </a>
      <span style="font-size:30px; color:red; margin-right:30px;" id="">HOLD</span>
      <span style="font-size:30px;" id="seconds_hold">00</span><span id="tens_hold" style="font-size:0px; color: #eff4ff;">00</span>
      <a id="button-stop"></a>
    </div>';
  } 
?>
  

</div>

<div style="float:right;  margin-right:5px; width: 35%;   margin-top: 10px; " align="center">

 

<?php

  
  if ($_SESSION['Round'] >= 1) {
    if (isset($_SESSION['Team3QuantityScoreRound'])) {
      echo '<div style="font-size:15px; font-weight: 800; border-radius: 9px; align-items: center;
     background-color: #025492">
  <p style="color:white">Score</p>
  <div style="margin-top: -10px; background-color: #037fdb; ">
   <p style="color:white;">TOTAL '.$TotalRound.'</p>';
      echo '<table width="100%"; style="background-color: #025492;">
     <tr align="center">
       <td width="40%" ></td>
       <td style="background-color:white" width="20%">Current</td>
       <td width="2%"></td>
       <td style="background-color:white" width="20%">Total</td>
       <td width="2%"></td>
     </tr>

     <tr align="center">
       <td width="40%" style="color: white; background-color: #037fdb; ">Quanitiy</td>
       <td style="background-color:white" width="28%">'.$_SESSION['Team3QuantityTotal'].'</td>
       <td width="2%"></td>
       <td style="background-color:white" width="28%">'.$TotalQuantity.'</td>
       <td width="2%"></td>
     </tr>

  <tr align="center">
       <td width="40%" ></td>
       <td style="background-color:white" width="20%"><br></td>
       <td width="2%"></td>
       <td style="background-color:white" width="20%"><br></td>
       <td width="2%"></td>
     </tr>

     <tr align="center">
       <td width="40%" style="color: white; background-color: #037fdb; ">Quality</td>
       <td style="background-color:white" width="20%">'.$current_quality.'</td>       
       <td width="2%"></td>
       <td style="background-color:white" width="20%">'.$TotalQuality.'</td>
       <td width="2%"></td>
     </tr>

  <tr align="center">
       <td width="40%" ></td>
       <td style="background-color:white" width="20%"><br></td>
       <td width="2%"></td>
       <td style="background-color:white" width="20%"><br></td>
       <td width="2%"></td>
     </tr>



  <tr align="center">
  <td width="40%" style="color: white; background-color: #037fdb; ">Bonus</td>
  <td style="background-color:white" width="20%"> 
    ';

    if ($_SESSION['RoundCompleate_team3'] == true && $_SESSION['RoundQualityCompleate_team3'] == true) {
      echo $_SESSION['Team3BonusScoreRound'];
    }
    elseif ($_SESSION['RoundCompleate_team3'] == true ) {
      echo $_SESSION['Team3BonusScoreRound'];
      
    }    
    else{
      echo '<input type="text" id="number"  name="number" value="0" style="width: 100%; background: #ffffff; border-style: none; text-align: center;">';
    }
    
  
  echo'</td>
    <td width="2%"></td>
    <td style="background-color:white" width="20%">'.$TotalBonus.'</td>
    <td width="2%"></td>
    
  </tr>

  ';
echo '</table></div></div>';
    }
    else{
      echo '<div style="border-radius: 9px; align-items: center;
     background-color: #025492">
  <p style="color:white">Score</p>
  <div style="background-color: #037fdb; ">
   <p style="color:white;">TOTAL 0</p>';

      echo '<table width="100%"; style="background-color: #025492;">
     <tr align="center">
       <td width="40%" ></td>
       <td style="background-color:white" width="20%">Current</td>
       <td width="2%"></td>
       <td style="background-color:white" width="20%">Total</td>
       <td width="2%"></td>
     </tr>


     <tr align="center">
       <td width="40%" style="color: white; background-color: #037fdb; ">Quanitiy</td>
       <td style="background-color:white" width="20%">0</td>
       <td width="2%"></td>
       <td style="background-color:white" width="20%">0</td>
       <td width="2%"></td>
     </tr>

  <tr align="center">
    <td align="right" style=" padding-right: 13px;border-right-style: groove;">
      '.$_SESSION['Team3QuantityScoreRound'].'
    </td>
    <td width="70%" style=" color: #c66464; font-size: 18px;">
      '.$_SESSION['Team3QuantityTotal'].'
    </td>
    <td align="right" style="padding-right: 13px;" width="25%" style=" font-size: 18px;">0</td>
  </tr>

  <tr align="center">
  <td align="right" style="padding-right: 13px;border-right-style: groove;">0</td>
    <td style="color: #c66464; font-size: 18px;">Quality</td>
    <td  align="right" style="padding-right: 13px; font-size: 18px;">0</td>
  </tr>

  <tr align="center">
  <td align="right" style="padding-right: 13px;border-right-style: groove;">0</td>
    <td style="color: #c66464; font-size: 18px;">BONUS</td>
    <td align="right" style="padding-right: 13px; font-size: 18px;">
      '.$_SESSION['Team3BonusTotal'].'
    </td>
  </tr>

  <tr align="center" style="border-top: #5d33f5; border-bottom-color: #5d33f5; border-top-style: double;">
    <td align="right" style="padding-right: 13px;">0</td>
    <td style="color: #c66464; font-size: 18px;">Total</td>
    <td align="right" style="padding-right: 13px; font-size: 18px;">
      '.$_SESSION['Team3Total'].'
    </td>
    
  </tr>
  <tr>

  </tr>
</table>';
    }
  } 
?>


</div>


<br><br><br><br><br><br><br><br>
<center>


<?php 
  if (isset($_SESSION['RoundCompleate_team3'])) {
    if ($_SESSION['RoundCompleate_team3'] == true) {
      echo '<br>';
    }
    else{
      echo '<a id="button-start_hold" style="font-weight: 700; 
      background-color: #feff13; color: #f90707; " class="btn " 
      onclick="incrementValue()">BONUS</a>';
    }
  }
?>
  
  
  
   

  <input type="text" id="ath"  name="ath" hidden="true"> 
  <input type="text" id="hold" name="hold"  hidden="true"> 
</form>                    
</center><br>

<script type="text/javascript">
  function incrementValue()
    {
      var value = parseInt(document.getElementById('number').value, 10);
      value = isNaN(value) ? 0 : value;
      value = value+10;
      document.getElementById('number').value = value;
    }

    function getTime()
    {
      //var elem = document.getElementById("xyz");  
      var ATH = document.getElementById("seconds").innerHTML;
      var hold = document.getElementById("seconds_hold").innerHTML;
      //var ATH = parseInt(document.getElementById('seconds').value, 10);
      //ATH = isNaN(ATH) ? 0 : ATH;
      document.getElementById('ath').value = ATH;
      document.getElementById('hold').value = hold;
    }
</script>


<div>



</body>
</html>