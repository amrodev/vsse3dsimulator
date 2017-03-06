<?php
require_once 'lib/database.php';
session_start();
$rounds =  $_SESSION['Round']-1;
$_db = new Database();
// Team 1 //////////////////////////////////////////////////////////
$q_chart_team1   = "SELECT * FROM rounds WHERE team='team1' ";
$cahrt_team1 = $_db->get_by_query($q_chart_team1);

////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE HTML>
<html>
<head>
  
<script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {            
      title:{
        text: "Team 1"              
      },
      data: [  //array of dataSeries     
      { //dataSeries - first quarter
 /*** Change type "column" to "bar", "area", "line" or "pie"***/        
       type: "column",
       name: "Quantity",
       showInLegend: true,
       dataPoints: [
       <?php
         $x = 1;
         for ($i=0; $i <$rounds ; $i++) {  
            $quant_string = "quantity_round".$x;
            echo '{ label: "Round '.$x.'", y: '.$cahrt_team1[0][$quant_string].' },';
            $x++;
          } 
       ?>
       
       ]
     },

     { //dataSeries - second quarter

      type: "column",
      name: "Quality", 
      showInLegend: true,               
      dataPoints: [
      <?php
         $x = 1;
         for ($i=0; $i <$rounds ; $i++) {  
            $qulity_string = "quality_round".$x;
            echo '{ label: "Round '.$x.'", y: '.$cahrt_team1[0][$qulity_string].' },';
            $x++;
          } 
       ?>
      ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      prefix: "",
      suffix: ""
    }    
  });

chart.render();
}
</script>
  <div id="chartContainer" style="height: 130px; width: 100%;">
  </div>
</body>
</html>