<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require '../../sessionstart.php';
	require '../../logout.php';
	if(!isset($_SESSION['login_user'])){
		header('Location: /index.php');
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="../../_css/main.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../../_js/jquery-1.12.2.js "></script>
		<script type="text/javascript" src="../../_js/jquerycode.js "></script>
		<script type="text/javascript" src="/CFIDE/scripts/cfform.js"></script>
		<script type="text/javascript" src="/CFIDE/scripts/masks.js"></script>
		<script type="text/javascript" src="../../_js/swfobject.js"></script>
		<script type="text/javascript" src="../../_js/jquery.tabledit.min.js"></script>
		<script type="text/javascript" src="../../_js/jquery.tabledit.js"></script>
		<title>Delete Page</title>
	</head>
	<div style="display:block;background:rgb(0,0,0);display:inline-block;width:100%;position:relative;z-index:2;top:0;">
		<?php if( !isset($_SESSION["login_user"])){ ?>
			<button onclick="document.getElementById('id01').style.display='block'" class="headerbutton">Login</button>

			<div id="id01" class="modal">
			  
			  <form class="modal-content animate" action="" method="post">
				<div class="imgcontainer">
				  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				  <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
				</div>

				<div class="container">
				  <label for="uname"><b>Username</b></label>
				  <input type="text" placeholder="Enter Username" name="uname" required>

				  <label for="psw"><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="psw" required>
					
				  <button value="Submit" type="submit">Login</button>
				</div>

				<div class="container" style="background-color:#f1f1f1">
				  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
			  </form>
			</div>
			<?php }else{ ?>
				<div style="padding-left:5px;display: inline-block;color:white;"><p style="font-size:16px;font-weight:700;">WELCOME, <?php echo $_SESSION["login_user"]?>.</span></p></div>
				<div style="display: inline-block;float:right;"><form action="" method="post"><input type="hidden" name="logout" value="1"/><input class="headerbutton" type="submit" value="LOGOUT"/></form></div>
			<?php } ?>
		</div>
		<?php
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "SELECT id,callorder,crew,callsign,firstname,lastname,sNumber,position,area,alternatephone,personalcell,workphone,workcell FROM crewinfo WHERE id='".$_GET['id']."'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$url = "crewcallout.php?crew=".$row['crew'];
			//"DELETE FROM crewinfo WHERE id='".$_GET['id']."'";
			if(isset($_POST['confirm'])){
				if($_POST['confirm'] == 0){
					header("Location: $url" );
				}else if($_POST['confirm'] == 1){
					$conn->query("DELETE FROM crewinfo WHERE id='".$_GET['id']."'");
					header("Location: $url" );
				}
			}
		?>
		<body>
			<div class="content">
				<div id="mainCon">
					<h1>Delete <?php echo $row['firstname']." ".$row['lastname'] ?></h1>
					<center><p style="display:inline-block;text-align:center;font-size:400%;font-weight:900;">Confirm:<p></center>
					<div style="display:inline-block;padding-left:40%;" style="float:left;">
						<form action="" method="POST">
							<div class="container">
							<input type="hidden" name="confirm" value="0">
							<button style="font-size:200%;" type="submit" name="submit" class="cancelbtn">NO</button>
							</div>
						</form>
					</div>
					<div style="display:inline-block;float:right;;padding-right:40%;">
						<form action="" method="POST">
							<div class="container">
							<input type="hidden" name="confirm" value="1">
							<button style="background-color:green;font-size:200%" type="submit" name="submit" class="cancelbtn">YES</button>
							</div>
						</form>
					</div>
					
				</div>
				<footer>
					<table align="center" class="footerTable">
						<tr>
							<th colspan="6"></th>
						</tr>
						<tr>
						<td></td>
							<td><a class="footerLink" href="links/index.php">External Links</a>
							<a class="footerLink" href="about/index.php">About Us/Contact information</a>
							<a class="footerLink" href="deoc/index.php">DEOC</a>
							<a class="footerLink" href="biz/index.php">Index</a></td>
						<td></td>
						</tr>
					</table>
				</footer>
			<div>
		</body>