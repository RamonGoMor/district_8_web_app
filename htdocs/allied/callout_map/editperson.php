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
		<title>Edit Page</title>
	</head>
	<div style="display:block;background:rgb(0,0,0);display:inline-block;width:100%;position:fixed;z-index:2;top:0;">
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
			$db = mysqli_connect($servername,$username,$password,$dbname);
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
				$sql = "UPDATE crewinfo SET callorder='$callorder',crew='$crew',callsign='$callsign',firstname='$firstname',lastname='$lastname',sNumber='$sNumber',position='$position',area='$area',alternatephone='$alternatephone',personalcell='$personalcell',workphone='$workphone',workcell='$workcell' WHERE id='".$row['id']."'";
				mysqli_query($db,$sql);
				header("Location: $url" );
			}
			if(isset($_POST['cancel'])){
				header("Location: $url" );
			}
		?>
		<body>
			<div class="content">
				<div id="mainCon">
					<h1>Edit <?php echo $row['firstname']." ".$row['lastname'] ?></h1>
					 <form action="" method="post" >
						<div class="container">
				
							  <label for="crew"><b>Crew</b></label>
							  <input type="text" placeholder="Enter Crew" name="crew" required value="<?php echo $row['crew'] ?>">

							  <label for="callsign"><b>Call Sign</b></label>
							  <input type="text" placeholder="Enter Call Sign" name="callsign" required value="<?php echo $row['callsign'] ?>">
							  
							  <label for="callorder"><b>Call Order #</b></label>
							  <input type="text" placeholder="Enter Call Order #" name="callorder" required value="<?php echo $row['callorder'] ?>">
							  
							  <label for="firstname"><b>First Name</b></label>
							  <input type="text" placeholder="Enter First Name" name="firstname" required value="<?php echo $row['firstname'] ?>">
							  
							  <label for="lastname"><b>Last Name</b></label>
							  <input type="text" placeholder="Enter Last Name" name="lastname" required value="<?php echo $row['lastname'] ?>">
							  
							   <label for="sNumber"><b>S-Number</b></label>
							  <input type="text" placeholder="Enter S-Number" name="sNumber" value="<?php echo $row['sNumber'] ?>">
							  
							   <label for="position"><b>Position</b></label>
							  <input type="text" placeholder="Enter Position" name="position" value="<?php echo $row['position'] ?>">
							  
							   <label for="area"><b>Area</b></label>
							  <input type="text" placeholder="Enter Area" name="area" value="<?php echo $row['area'] ?>">
							  
							   <label for="alternatephone"><b>Alternate Phone #</b></label>
							  <input type="text" placeholder="Enter Alternate Phone #" name="alternatephone" value="<?php echo $row['alternatephone'] ?>">
							  
							  <label for="personalcell"><b>Personal Cell #</b></label>
							  <input type="text" placeholder="Enter Personal Cell #" name="personalcell" value="<?php echo $row['personalcell'] ?>">
							  
							  <label for="workphone"><b>Work Phone #</b></label>
							  <input type="text" placeholder="Enter Work Phone #" name="workphone" value="<?php echo $row['workphone'] ?>">
							  
							  <label for="workcell"><b>Work Cell #</b></label>
							  <input type="text" placeholder="Enter Work Cell #" name="workcell" value="<?php echo $row['workcell'] ?>">
							  <button value="submit" type="submit">Save</button>
						</div>	 
				</div>
			  </form>
			  <form action="" method="POST">
					<div class="container">
					<input type="hidden" name="cancel" value="1">
					<button type="submit" name="submit" class="cancelbtn">Cancel</button>
					</div>
			  </form>
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
				</div>
		</body>
</html>