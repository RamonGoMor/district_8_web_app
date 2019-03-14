<?php
	$id = $_GET['id'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT counter FROM d8_refresh_counter WHERE id=$id");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		echo $result['counter'];
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
?>