<!DOCTYPE html>
<?php
	require "../../assets/php/main_controller.php";
	require "php/calendar_controller.php";
	$title = "Calendar";
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php add_head($title); ?>
		<link rel="stylesheet" href="css/calendar.css?r=<= microtime(true);>">
		<script type="text/javascript" src="javascript/calendar.js"></script>
	</head>
	<body>
		<data id="check_counter" value="-1"></data>
		<?php add_header(); ?>
		<div class="content">
			<div class="calendar-container">
				<img id="calendar" src="images/calendar.png">
			</div>
		</div>
		<?php add_footer(); ?>
		<div class="modal">
			<div class="modal-container">
				<div class="modal-header"><a class="modal-close">&#10060;</a></div>
				<div class="modal-content">
					
				</div>
			</div>
		</div>
	</body>
</html>
