<?php 
	session_start();
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	 $db = mysqli_connect($servername,$username,$password,$dbname);
	// Check connection
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      if( isset($_POST['uname']) && isset($_POST['psw'])){
		$myusername = mysqli_real_escape_string($db,$_POST['uname']);
		$mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
		  $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
		  $result = mysqli_query($db,$sql);
		  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  //$active = $row['active'];
		  
		  $count = mysqli_num_rows($result);
		  
		  // If result matched $myusername and $mypassword, table row must be 1 row
			
		  if($count == 1) {
			 //session_register("myusername");
			 $_SESSION['login_user'] = $myusername;
		  }else {
			 $error = "Your Login Name or Password is invalid";
			 echo $error;
		  }
	}
   }
   mysqli_close($db);
?>