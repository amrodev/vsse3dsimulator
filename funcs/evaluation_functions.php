<?php 

if (isset($_POST['evaluation'])) {
	
	$target_time = '300';
	$target_hold = '30';

	$call_timer = '';
	$hold_timer = '';

	$score = 0;

	if ($call_timer < $target_time+1) {
		$score += 100;
	}
	elseif ($call_timer < (1.2*$target_time)+1) {
		$score += 50;
	}
	elseif ($call_timer < (1.4*$target_time)+1) {
		$score += 25;
	}
	elseif ($call_timer > (1.4*$target_time)+1) {
		$score += 0;
	}
}
?>