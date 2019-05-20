<?php 
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	 $db = mysqli_connect($servername,$username,$password,$dbname);
	// Check connection
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
		if(isset($_POST['agencytype'])){
			$agencytype = $_POST['agencytype'];
		if(isset($_POST['agencyname'])){$agencyname = $_POST['agencyname'];}else{$agencyname = "";}
			if(isset($_POST['contactnumber'])){$contactnumber = $_POST['contactnumber'];}else{$contactnumber = "";}
			if(isset($_POST['comment'])){$comment = $_POST['comment'];}else{$comment = "";}
			$sql = "INSERT INTO agencycontacts (agencyname, agencytype, contactnumber,comment) VALUES ('$agencyname', '$agencytype', '$contactnumber','$comment')";	
			mysqli_query($db,$sql);
	   }
	}
	mysqli_close($db);
?>