<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=database", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$x = $conn->prepare("SELECT * FROM d8_users WHERE username=:username OR email=:username");
		$x->bindParam(':username',$_POST['user']);
		$x->execute();
		if( $x->rowCount() > 0 ){
			$row = $x->fetch(PDO::FETCH_ASSOC);
			if(password_verify($_POST['pass'], $row['pass'])){
				echo json_encode(array("code"=>true));
				$_SESSION['user'] = $row['username'];
				if($_POST['reme'] == true){
					$token = mt_rand();
					$id = mt_rand();
					$cookie = hash("sha512", $id.":".$token);
					$x = $conn->prepare("UPDATE d8_users SET cookie=:cookie WHERE username=:username");
					$x->bindParam(':username',$row['username']);
					$x->bindParam(':cookie',$cookie);
					setcookie("token",$token,time() + (86400 * 30), "/");
					setcookie("id",$id,time() + (86400 * 30), "/");
					$x->execute();
				}
			}else{
				echo json_encode(array("code"=>false,"description"=>"Invalid Password"));
			}
		}else{
			echo json_encode(array("code"=>false,"description"=>"Invalid Username/Email"));
		}
	}
	catch(PDOException $e){
		echo json_encode(array("code"=>false,"description"=>"Couldn't connect to the server"));
	}
?>