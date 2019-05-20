<!DOCTYPE html>
<?php
	require "../../assets/php/main_controller.php";
	require "php/homepage_controller.php";
	$title = "Homepage";
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php add_head($title); ?>
		<link rel="stylesheet" href="css/homepage.css?r=<= microtime(true);>">
		<script type="text/javascript" src="javascript/homepage.js"></script>
	</head>
	<body>
		<data id="check_counter" value="-1"></data>
		<?php add_header(); ?>
		<div class="content">
			<div class="content-special">
				<div class="display-dark"><a href="#"><button>Web Post Mile</button></a></div>
				<div class="display-dark">ENTAC - (916) 843-4199<br>Road Info - (800) 427-7623</div>
				<div class="display-dark">US Army Core of Engineers<br>Ref: Prado Dam<br>PIO (213) 452-3623</div>
			</div>
			<div class="content-tables-2">
				<div>
					<table class="homepage-table">
						<thead>
							<tr class="text-center">
								<th colspan="5">Check-In</th>
							</tr>
							<tr>
								<th>Call Sign</th>
								<th>EFIS</th>
								<th>Status</th>
								<th>Date</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody class="tbody-green">
							<?php emptyRow(5); ?>
						</tbody>
						<tfoot>
							<?php emptyRow(5); ?>
						</tfoot>
					</table>
				</div>
				<div>
					<table class="homepage-table">
						<thead>
							<tr class="text-center">
								<th colspan="3">On Leave</th>
							</tr>
							<tr>
								<th>Call Sign</th>
								<th>Coming Back On</th>
								<th>Who to Contact</th>
							</tr>
						</thead>
						<tbody class="tbody-red">
							<?php emptyRow(3); ?>
						</tbody>
						<tfoot>
							<?php emptyRow(3); ?>
						</tfoot>
					</table>
				</div>
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
