<?php
	$id = $_GET["id"];
	switch($id){
		case "login":
			include "../components/login_modal.php";
			break;
	}
?>