<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="1">

</head>
<body>

<p id="demo"></p>

<script type="text/javascript">
var timer = document.getElementById('demo');
if (localStorage.getItem("team1_aht") === null) {
    timer.innerHTML = 0;
}
else{	
	var name = localStorage.getItem('team1_aht');    
    timer.innerHTML = name;
}
</script>