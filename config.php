<?php
require_once 'lib/settings.php';
$_settings = new Setting();
$settings  = $_settings->get_all();
$logo      = $settings[9][2];
$bg        = $settings[10][2];
$n_teams   = $settings[11][2];
$n_rounds  = $settings[2][2]
?>