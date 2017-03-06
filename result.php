<?php
session_start();
require_once 'config.php';
require_once 'lib/database.php';
$_db = new Database;
//sele$qu = "select * from vodafone.rounds where team='team1' and quality_round2>0;";ct * from vodafone.rounds where team='team1' and quality_round2>0;

$x=1;
$roundNow =$x;  
for ($i=0; $i <15 ; $i++) { 
  
  $search = 'quantity_round'.$x;
  $qu = "select * from rounds where team='team1' and $search>0;";

  $rounds = $_db->get_by_query($qu);

  if (isset($rounds[0]['id'])) 
  {
    if ($rounds[0]['id'] == 0) {
    $roundNow = $x;
    }
    else{
      $roundNow =1;
    }
  }
  else{
    
  }
  $x++;
}
/// Team 1
$q1_team1 = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15) FROM rounds WHERE team = 'team1'";
$q2_team1 = "SELECT SUM(quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15) FROM rounds WHERE team = 'team1'";
$q3_team1 = "SELECT SUM(bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team1'";
$quality_team1  = $_db->get_by_query($q1_team1);
$quantity_team1 = $_db->get_by_query($q2_team1);
$bonus_team1    = $_db->get_by_query($q3_team1);
$Team1totalQuality  = $quality_team1[0][0];
$Team1totalQuantity = $quantity_team1[0][0];
$Team1totalBonus    = $bonus_team1[0][0];

//$Team1totalQuality,$Team1totalQuantity,$Team1totalBonus;

/// Team 2
$q1_team2 = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15) FROM rounds WHERE team = 'team2'";
$q2_team2 = "SELECT SUM(quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15) FROM rounds WHERE team = 'team2'";
$q3_team2 = "SELECT SUM(bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team2'";
$quality_team2  = $_db->get_by_query($q1_team2);
$quantity_team2 = $_db->get_by_query($q2_team2);
$bonus_team2    = $_db->get_by_query($q3_team2);
$Team2totalQuality  = $quality_team2[0][0];
$Team2totalQuantity = $quantity_team2[0][0];
$Team2totalBonus    = $bonus_team2[0][0];

/// Team 3
$q1_team3 = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15) FROM rounds WHERE team = 'team3'";
$q2_team3 = "SELECT SUM(quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15) FROM rounds WHERE team = 'team3'";
$q3_team3 = "SELECT SUM(bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team3'";
$quality_team3  = $_db->get_by_query($q1_team3);
$quantity_team3 = $_db->get_by_query($q2_team3);
$bonus_team3    = $_db->get_by_query($q3_team3);
$Team3totalQuality  = $quality_team3[0][0];
$Team3totalQuantity = $quantity_team3[0][0];
$Team3totalBonus    = $bonus_team3[0][0];

/// Team 4
$q1_team4 = "SELECT SUM(quality_round1+quality_round2+quality_round3+quality_round4+quality_round5+quality_round6+quality_round7+quality_round8+quality_round9+quality_round10+quality_round11+quality_round12+quality_round13+quality_round14+quality_round15) FROM rounds WHERE team = 'team4'";
$q2_team4  = "SELECT SUM(quantity_round1+quantity_round2+quantity_round3+quantity_round4+quantity_round5+quantity_round6+quantity_round7+quantity_round8+quantity_round9+quantity_round10+quantity_round11+quantity_round12+quantity_round13+quantity_round14+quantity_round15) FROM rounds WHERE team = 'team4'";
$q3_team4  = "SELECT SUM(bonus_round1+bonus_round2+bonus_round3+bonus_round4+bonus_round5+bonus_round6+bonus_round7+bonus_round8+bonus_round9+bonus_round10+bonus_round11+bonus_round12+bonus_round13+bonus_round14+bonus_round15) FROM rounds WHERE team = 'team4'";
$quality_team4   = $_db->get_by_query($q1_team4 );
$quantity_team4  = $_db->get_by_query($q2_team4 );
$bonus_team4     = $_db->get_by_query($q3_team4 );
$Team4totalQuality  = $quality_team4[0][0];
$Team4totalQuantity = $quantity_team4[0][0];
$Team4totalBonus    = $bonus_team4[0][0];

?>



<!DOCTYPE html>
<html>
<head>
<script src="js/timer.js"></script>
   <script src="js/timer_hold.js"></script>
  <title>Result</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
  
  <script>
    function CallAHTTeam1() {
      $.ajax({
         url: "result_aht_team1.html", 
         success: (function (result) {
             $("#divAHTTeam1").html(result);
         })
      })
    };
    function CallAHTTeam2() {
      $.ajax({
         url: "result_aht_team2.html", 
         success: (function (result) {
             $("#divAHTTeam2").html(result);
         })
      })
    };
    function CallAHTTeam3() {
      $.ajax({
         url: "result_aht_team3.html", 
         success: (function (result) {
             $("#divAHTTeam3").html(result);
         })
      })
    };
    function CallAHTTeam4() {
      $.ajax({
         url: "result_aht_team4.html", 
         success: (function (result) {
             $("#divAHTTeam4").html(result);
         })
      })
    };

    function CallHOLDTeam1() {
      $.ajax({
         url: "result_hold_team1.html", 
         success: (function (result) {
             $("#divHOLDTeam1").html(result);
         })
      })
    };
    function CallHOLDTeam2() {
      $.ajax({
         url: "result_hold_team2.html", 
         success: (function (result) {
             $("#divHOLDTeam2").html(result);
         })
      })
    };
    function CallHOLDTeam3() {
      $.ajax({
         url: "result_hold_team3.html", 
         success: (function (result) {
             $("#divHOLDTeam3").html(result);
         })
      })
    };
    function CallHOLDTeam4() {
      $.ajax({
         url: "result_hold_team4.html", 
         success: (function (result) {
             $("#divHOLDTeam4").html(result);
         })
      })
    };
    CallAHTTeam1(); 
    setInterval(CallAHTTeam1, (1 * 1000));
    CallAHTTeam2(); 
    setInterval(CallAHTTeam2, (1 * 1000));
    CallAHTTeam3(); 
    setInterval(CallAHTTeam3, (1 * 1000));
    CallAHTTeam4(); 
    setInterval(CallAHTTeam4, (1 * 1000));

    CallHOLDTeam1(); 
    setInterval(CallHOLDTeam1, (1 * 1000));
    CallHOLDTeam2(); 
    setInterval(CallHOLDTeam2, (1 * 1000));
    CallHOLDTeam3(); 
    setInterval(CallHOLDTeam3, (1 * 1000));
    CallHOLDTeam4(); 
    setInterval(CallHOLDTeam4, (1 * 1000)); 
</script>


</head>
<style>
  
  body{margin:auto;
  background-color: #1f242a;
}

  .container{
    background-color: #1f242a;
  }
  

  .teamLeft{
    float: left;
    width: 46%;
    background-color: #eff4ff;
        border: #252a2a;
        border-style: groove;
        padding-left: 5px;
        height: 300px;
        margin-bottom: 10px;
        margin-right: 5px;
  }

  .teamRight{
    float: right;
    width: 46%;
    background-color: #eff4ff;
        border: #252a2a;
        border-style: groove;
        padding-left: 5px;
        height: 300px;
        margin-bottom: 10px;;
  }

  .team1{
     border-radius: 10px;
     background-color: #025492;
     height: 400px;
     width:200px;
     color:white;
  }

  .team2{
     border-radius: 10px;
     background-color: #4f5a0e;
     height: 400px;
     width:200px;
     color:white;
  }

  .team3{
     border-radius: 10px;
     background-color: #7d106e;
     height: 400px;
     width:200px;
     color:white;
  }

  .team4{
     border-radius: 10px;
     background-color: #8b530a;
     height: 400px;
     width:200px;
     color:white;
  }


</style>
<body>

<script type="text/javascript">
<?php
if (!isset($_SESSION['OldRound'])) {
   $_SESSION['OldRound'] = 1;
 } 
 if ($_SESSION['Round']  == $_SESSION['OldRound'] ) 
 {
    echo "localStorage.setItem('team1_aht' , '00');";
    echo "localStorage.setItem('team2_aht' , '00');";
    echo "localStorage.setItem('team3_aht' , '00');";
    echo "localStorage.setItem('team4_aht' , '00');";

    echo "localStorage.setItem('team1_hold' , '00');";
    echo "localStorage.setItem('team2_hold' , '00');";
    echo "localStorage.setItem('team3_hold' , '00');";
    echo "localStorage.setItem('team4_hold' , '00');";
    $_SESSION['OldRound']++;

 }
 else{
   
 }
?>
  </script>

<div class="container" align="center">
<img  src="<?php echo $logo; ?>"  width="10%">

  <table width="100%; ">
    <tr align="center">

      <td 
        <?php 
         $x = 1;
         if ($x >$n_teams) {
           echo ' hidden="true"';
         }
        ?> 
      >
        <div class="team1">
        <h2 style="padding-top:15px;">Team 1</h2>
          <div style="position:AHAHative; padding-top:20px; font-size:25px; margin-top:-15px; background-color: #037fdb">
            <p style="margin-top: -2px; font-size: 14px; margin-left: -110px;">TOTAL</p>
            <p style="margin-top: -18px; font-weight: 700; font-size: 35px;"><?php echo $Team1totalQuality+$Team1totalQuantity+$Team1totalBonus; ?></p>
          </div>
          <div style="color:black; margin-top:-40px; background-color: white;  border-radius: 10px;">
            <br><br>
            
            <div style="background-color: #037fdb; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quality</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team1totalQuality; ?></p>
            </div>
            <br><br>
             <div style="background-color: #037fdb; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quantity</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team1totalQuantity; ?></p>
            </div>
           <br>

           <table>
             <tr align="center">
               
               <td style="color:white; background-color: #037fdb; border-radius: 6px;">AHT
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divAHTTeam1" ></div></p>
                 </div>
               </td>
               <td style="color:white; background-color: #037fdb; border-radius: 6px;">HOLD
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divHOLDTeam1"></div></p>
                 </div>
               </td>

             </tr>
           </table>
           
           <br>
            <table>
           <tr>
           <?php 
              if(!isset($_SESSION['Round'])) 
              {
                echo '<td style="color:#037fdb;">waiting...</td>';
              }
              else{
                if ($_SESSION['Round'] == $n_rounds+1) {
                  echo '<td style="background-color: #037fdb; width: 90px;
                      border-radius: 3px; color: white; 
                      text-align: center;">Thank you</td>';
                }
                else{
                  echo '<td style="color:#037fdb;">Round</td>
                      <td style="background-color: #037fdb; width: 20px;
                      border-radius: 3px; color: white; 
                      text-align: center;">'.$_SESSION['Round'].'</td>';
                }
                
              }
           ?>
                
              </tr>
            </table>
            <br>
          </div>
        </div>
      </td>
     
      <td <?php 
         $x = 2;
         if ($x >$n_teams) {
           echo ' hidden="true"';
         }
        ?> >
         <div class="team2">
        <h2 style="padding-top:15px;">Team 2</h2>
          <div style="position:relative; padding-top:20px; font-size:25px; 
                margin-top:-15px; background-color: #768615">
            <p style="margin-top: -2px; font-size: 14px; margin-left: -110px;">TOTAL</p>
            <p style="margin-top: -18px; font-weight: 700; font-size: 35px;"><?php echo $Team2totalQuality+$Team2totalQuantity+$Team2totalBonus; ?></p>
          </div>
          <div style="color:black; margin-top:-40px; background-color: white;  border-radius: 10px;">
            <br><br>
            
            <div style="background-color: #768615; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quality</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team2totalQuality; ?></p>
            </div>
            <br><br>
             <div style="background-color: #768615; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quantity</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team2totalQuantity; ?></p>
            </div>
            <br>

            <table>
             <tr align="center">
               
               <td style="color:white; background-color: #768615; border-radius: 6px;">AHT
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divAHTTeam2"></div></p>
                 </div>
               </td>
               <td style="color:white; background-color: #768615; border-radius: 6px;">HOLD
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divHOLDTeam2"></div></p>
                 </div>
               </td>

             </tr>
           </table>
<br>
            <table>
              <tr>
              <?php 
                if (!isset($_SESSION['Round'])) {
                  echo '<td style="color:#768615;">waiting...</td>';
                }
                else{
                  if ($_SESSION['Round'] == $n_rounds+1) {
                  echo '<td style="background-color: #768615; width: 90px;
                      border-radius: 3px; color: white; 
                      text-align: center;">Thank you</td>';
                }
                else{
                  echo '<td style="color:#768615;">Round</td>
                      <td style="background-color: #768615; width: 20px;
                      border-radius: 3px; color: white; 
                      text-align: center;">'.$_SESSION['Round'].'</td>';
                }
                }
              ?>
                
              </tr>
            </table>
            <br>
          </div>
        </div>
      </td>
      
      <td <?php 
         $x = 3;
         if ($x >$n_teams) {
           echo ' hidden="true"';
         }
        ?> >
         <div class="team3">
        <h2 style="padding-top:15px;">Team 3</h2>
          <div style="position:relative; padding-top:20px; font-size:25px; 
          margin-top:-15px; background-color: #b4169e">
            <p style="margin-top: -2px; font-size: 14px; margin-left: -110px;">TOTAL</p>
            <p style="margin-top: -18px; font-weight: 700; font-size: 35px;"><?php echo $Team3totalQuality+$Team3totalQuantity+$Team3totalBonus; ?></p>
          </div>
          <div style="color:black; margin-top:-40px; background-color: white;  border-radius: 10px;">
            <br><br>
            
            <div style="background-color: #b4169e; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quality</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team3totalQuality; ?></p>
            </div>
            <br><br>
             <div style="background-color: #b4169e; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quantity</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team3totalQuantity; ?></p>
            </div>
            <br>

            <table>
             <tr align="center">
               
               <td style="color:white; background-color: #7d106e; border-radius: 6px;">AHT
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divAHTTeam3"></div></p>
                 </div>
               </td>
               <td style="color:white; background-color: #7d106e; border-radius: 6px;">HOLD
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divHOLDTeam3"></div></p>
                 </div>
               </td>

             </tr>
           </table><br>


            <table>
              <tr>
              <?php
               if (!isset($_SESSION['Round'])) 
               {
                  echo '<td style="color:#b4169e;">waiting...</td>';
               }
               else{
                if ($_SESSION['Round'] == $n_rounds+1) {
                  echo '<td style="background-color: #b4169e; width: 90px;
                      border-radius: 3px; color: white; 
                      text-align: center;">Thank you</td>';
                }
                else{
                  echo '<td style="color:#b4169e;">Round</td>
                      <td style="background-color: #b4169e; width: 20px;
                      border-radius: 3px; color: white; 
                      text-align: center;">'.$_SESSION['Round'].'</td>';
                }
               } 
              ?>
                
              </tr>
            </table>
            <br>
          </div>
        </div>
      </td>

      <td <?php 
         $x = 4;
         if ($x >$n_teams) {
           echo ' hidden="true"';
         }
        ?> >
        <div class="team4">
        <h2 style="padding-top:15px;">Team 4</h2>
          <div style="position:relative; padding-top:20px; font-size:25px; 
          margin-top:-15px; background-color: #d07c0f">
            <p style="margin-top: -2px; font-size: 14px; margin-left: -110px;">TOTAL</p>
            <p style="margin-top: -18px; font-weight: 700; font-size: 35px;"><?php echo $Team4totalQuality+$Team4totalQuantity+$Team4totalBonus; ?></p>
          </div>
          <div style="color:black; margin-top:-40px; background-color: white;  border-radius: 10px;">
            <br><br>
            
            <div style="background-color: #d07c0f; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quality</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team4totalQuality; ?></p>
            </div>
            <br><br>
             <div style="background-color: #d07c0f; border-radius: 6px;
                 width: 100px; color: white; padding-bottom: 1%;">
            <br>
               <p style="margin-top: -2px; font-size: 16px;  
                  margin-left: -40px;">Quantity</p>
               <p style="margin-top: -12px; font-weight: 600; font-size: 25px;"><?php echo $Team4totalQuantity; ?></p>
            </div>
            <br>
             
             <table>
             <tr align="center">
               
               <td style="color:white; background-color: #d07c0f; border-radius: 6px;">AHT
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divAHTTeam4"></div></p>
                 </div>
               </td>
               <td style="color:white; background-color: #d07c0f; border-radius: 6px;">HOLD
                 <div style="margin-top:-25px; margin-bottom: -25px; width: 50px; color: white; ">            
                  <p><div id="divHOLDTeam4"></div></p>
                 </div>
               </td>

             </tr>
           </table><br>

            <table>
              <tr>
              <?php 
                if (!isset($_SESSION['Round'])) {
                  echo '<td style="color:#d07c0f;">waiting...</td>';
                }
                else{
                  if ($_SESSION['Round'] == $n_rounds+1) {
                  echo '<td style="background-color: #d07c0f; width: 90px;
                      border-radius: 3px; color: white; 
                      text-align: center;">Thank you</td>';
                }
                else{
                  echo '<td style="color:#d07c0f;">Round</td>
                      <td style="background-color: #d07c0f; width: 20px;
                      border-radius: 3px; color: white; 
                      text-align: center;">'.$_SESSION['Round'].'</td>';
                }
                }
              ?>
                
              </tr>
            </table>
            <br>
          </div>
        </div>
      </td>
    </tr>
  </table>
<br><br><br><br><br><br><br><br>
 <br><br><br>


</div>

</body>
</html>