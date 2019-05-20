<?php 
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	 $db = mysqli_connect($servername,$username,$password,$dbname);
	// Check connection
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['crew']) && isset($_POST['callsign']) && isset($_POST['firstname']) && isset($_POST['lastname'] )){
			$crew = $_POST['crew'];
			$callsign = $_POST['callsign'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			if(isset($_POST['callorder'])){
				$callorder = $_POST['callorder'];
			}else{$callorder = 0;}
			if(isset($_POST['sNumber'])){
				$sNumber = $_POST['sNumber'];
			}else{$sNumber = "";}
			if(isset($_POST['position'])){
				$position = $_POST['position'];
			}else{$position = "";}
			if(isset($_POST['area'])){
				$area = $_POST['area'];
			}else{$area = "";}
			if(isset($_POST['alternatephone'])){
				$alternatephone = $_POST['alternatephone'];
			}else{$alternatephone = "";}
			if(isset($_POST['personalcell'])){
				$personalcell = $_POST['personalcell'];
			}else{$personalcell = "";}
			if(isset($_POST['workphone'])){
				$workphone = $_POST['workphone'];
			}else{$workphone = "";}
			if(isset($_POST['workcell'])){
				$workcell = $_POST['workcell'];
			}else{$workcell = "";}
			$sql = "INSERT INTO crewinfo (callorder, crew, callsign, firstname, lastname, sNumber, position, area, alternatephone, personalcell, workphone, workcell) VALUES ('$callorder','$crew', '$callsign', '$firstname', '$lastname', '$sNumber', '$position', '$area', '$alternatephone', '$personalcell', '$workphone', '$workcell')";	
			mysqli_query($db,$sql);
		}
	}
	mysqli_close($db);
	/*if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['crew'])){
			$crew = $_POST['crew'];
		}else{$crew = "";}
		if(isset($_POST['callsign'])){
			$callsign = $_POST['callsign'];
		}else{$callsign = "";}
		if(isset($_POST['firstname'])){
			$firstname = $_POST['firstname'];
		}else{$firstname = "";}
		if(isset($_POST['lastname'])){
			$lastname = $_POST['lastname'];	
		}else{$lastname = "";}
		if(isset($_POST['sNumber'])){
			$sNumber = $_POST['sNumber'];
		}else{$sNumber = "";}
		if(isset($_POST['position'])){
			$position = $_POST['position'];
		}else{$position = "";}
		if(isset($_POST['area'])){
			$area = $_POST['area'];
		}else{$area = "";}
		if(isset($_POST['alternatephone'])){
			$alternatephone = $_POST['alternatephone'];
		}else{$alternatephone = "";}
		if(isset($_POST['personalphone'])){
			$personalphone = $_POST['personalphone'];
		}else{$personalphone = "";}
		if(isset($_POST['workphone'])){
			$workphone = $_POST['workphone'];
		}else{$workphone = "";}
		if(isset($_POST['workcell'])){
			$workcell = $_POST['workcell'];
		}else{$workcell = "";}
		
			$sql = "INSERT INTO crewinfo (crew, callsign, firstname, lastname, sNumber, position, area, alternatephone, personalphone, workphone, workcell) VALUES ('$crew', '$callsign', '$firstname', '$lastname', '$sNumber', '$position', '$area', 'alternatephone', '$personalphone', '$workphone', '$workcell')";	
			mysqli_query($db,$sql);
	  }*/
?>