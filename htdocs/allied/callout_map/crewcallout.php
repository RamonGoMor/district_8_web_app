<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require '../../sessionstart.php';
	require 'addperson.php';
	require '../../logout.php'
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
		<title>CREW&nbsp;<?php echo $_GET['crew']?>&nbsp;Callout</title>
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
			<button onclick="document.getElementById('id02').style.display='block'" class="headerbutton"style="display: inline-block;float:right;">Add Person</button>
			<div id="id02" class="modal2">
			  
			  <form class="modal2-content animate2" action="" method="post" >
				<div class="container">
				
				  <label for="crew"><b>Crew</b></label>
				  <input type="text" placeholder="Enter Crew" name="crew" required>

				  <label for="callsign"><b>Call Sign</b></label>
				  <input type="text" placeholder="Enter Call Sign" name="callsign" required>
				  
				  <label for="callorder"><b>Call Order #</b></label>
				  <input type="text" placeholder="Enter Call Order #" name="callorder" required>
				  
				  <label for="firstname"><b>First Name</b></label>
				  <input type="text" placeholder="Enter First Name" name="firstname" required>
				  
				  <label for="lastname"><b>Last Name< /b></label>
				  <input type="text" placeholder="Enter Last Name" name="lastname" required>
				  
				   <label for="sNumber"><b>S-Number</b></label>
				  <input type="text" placeholder="Enter S-Number" name="sNumber" >
				  
				   <label for="position"><b>Position</b></label>
				  <input type="text" placeholder="Enter Position" name="position" >
				  
				   <label for="area"><b>Area</b></label>
				  <input type="text" placeholder="Enter Area" name="area" >
				  
				   <label for="alternatephone"><b>Alternate Phone #</b></label>
				  <input type="text" placeholder="Enter Alternate Phone #" name="alternatephone" >
				  
				  <label for="personalcell"><b>Personal Cell #</b></label>
				  <input type="text" placeholder="Enter Personal Cell #" name="personalcell" >
				  
				  <label for="workphone"><b>Work Phone #</b></label>
				  <input type="text" placeholder="Enter Work Phone #" name="workphone" >
				  
				  <label for="workcell"><b>Work Cell #</b></label>
				  <input type="text" placeholder="Enter Work Cell #" name="workcell" >
				  
				  <button value="Submit" type="submit">Save</button>
				</div>

				<div class="container" style="background-color:#f1f1f1">
				  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
			  </form>
			</div>
		<?php } ?>
			
	</div>
	<body>
		<?php
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "SELECT id,crew,EFIS_number, commentTitle1,comment1,commentTitle2,comment2,commentTitle3,comment3 FROM crewcomments WHERE crew='".$_GET['crew']."'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc()
		?>
	<div class="content">
		<div id="mainCon">
			<div id="logoPic"><a title="Home" href="/index.php"><img class="homeLogo" src="/_images/onlylogo.png"></img></a></div>
			<h1>Crew <?php echo $_GET['crew']?> Callout / EFIS No. <?php echo $row['EFIS_number']?></h1>
			<div style="text-align:center;">
				<?php if($row['commentTitle1'] !='' OR $row['comment1'] != '') {?>
					<div class="row"><p align="center">
						<strong><font size="5" color="#E67E22" face="Arial, Helvetica, sans-serif"><?php echo $row['commentTitle1'] ?></font></strong><br>
						<font size="4" color="#E67E22" face="Arial, Helvetica, sans-serif"><?php echo $row['comment1'] ?>
						<br></p>
					</div>
				<?php } if($row['commentTitle2'] !='' OR $row['comment2'] != '') {?>
					<div class="row"><p align="center">
						<strong><font size="4" color="#E67E22" face="Arial, Helvetica, sans-serif"><?php echo $row['commentTitle2'] ?></font></strong><br>
						<br>
						<font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><?php echo $row['comment2'] ?>
						<br></p>
					</div>
				<?php } if($row['commentTitle3'] !='' OR $row['comment3'] != '') {?>
					<div class="row"><p align="center">
						<strong><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><?php echo $row['commentTitle3'] ?></font></strong><br>
						<font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><?php echo $row['comment3'] ?>
						<br><br></p>
					</div>
				<?php } ?>
				<p><font size="4">
					Dispatch Radio Channel:&nbsp;&nbsp;
				</font></p>
				<p><em><strong><font size="4" color="#990000" face="Arial, Helvetica, sans-serif">Notify Superintendent on all Major Incidents:</font><font color="#000000" size="2" face="Arial, Helvetica, sans-serif"> 
					<br />
					i.e., Road Closures, Extended Lane Closures & Hazmat Spills, Employee Injuries or Accidents</font></em>
				</p>
			</div>
			<div style="text-align:center;">
				<span>Crew&nbsp;<?php echo $_GET['crew']?>&nbsp;Personnel<span>
				<table id="Table" class="linkTable noHover" border="0" cellspacing="1" cellpadding="1" align="left" style="width: 90%; margin-right: 5%; margin-left: 5%; margin-top: .5%;">
					<thead>
						<tr style="background-color:rgb(0,52,102);"><th width="255" height="15" align="left" style="display:none;"><div align="left">id</div></th>
							<th width="75" height="15" align="left"><div align="left"><span style="color:#ffffff;">Crew</span></div></th>
							<th width="255" height="15" align="left"><div align="left"><span style="color:#ffffff;">Call Sign</span></div></th>
							<th width="255" height="15" align="left"><div align="left"><span style="color:#ffffff;">First Name</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Last Name</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">sNumber</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Position</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Area</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Alternate Phone</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Personal Cell</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Work Phone</span></div></th>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Work Cell Phone</span></div></th>
							<?php if(isset($_SESSION['login_user'])){ ?>
							<th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Tools</span></div></th>
							<?php } ?>
							
						</tr>
					</thead>
					<tbody>
						<?php
							$servername = "localhost";
							$username = "username";
							$password = "password";
							$dbname = "myDB";
							$conn = new mysqli($servername, $username, $password, $dbname);
							$sql = "SELECT id,crew,callsign,firstname,lastname,sNumber,position,area,alternatephone,personalcell,workphone,workcell FROM crewinfo WHERE crew='".$_GET['crew']."' ORDER BY callorder";
							$result = $conn->query($sql);
							$table = '';
							$bgcolorcounter=1;
							 while($row = $result->fetch_assoc()){
									if($bgcolorcounter%2==1){
										$table .= '
										<tr style="background-color:#CCCCCC">
										   <td style="display:none;">'.$row["id"].'</td>
										   <td>'.$row["crew"].'</td>
										   <td>'.$row["callsign"].'</td>
										   <td>'.$row["firstname"].'</td>
										   <td>'.$row["lastname"].'</td>
										   <td>'.$row["sNumber"].'</td>
										   <td>'.$row["position"].'</td>
										   <td>'.$row["area"].'</td>
										   <td>'.$row["alternatephone"].'</td>
										   <td>'.$row["personalcell"].'</td>
										   <td>'.$row["workphone"].'</td>
										   <td>'.$row["workcell"].'</td>
										   ';
										if(isset($_SESSION['login_user'])){ $table .= '<th width="355" height="15" align="left"><div align="left">
										<a style="color:#000000;" href="editperson.php?id='.$row['id'].'">Edit</a><span style="color:#000000;"> / </span><a style="color:#000000;" href="deleteperson.php?id='.$row['id'].'">Delete</a></div></th>'; }
										   $table .= '
										</tr>
									  ';
									}else{
										$table .= '
										<tr style="background-color:#EFEFEF">
										   <td style="display:none;">'.$row["id"].'</td>
										   <td>'.$row["crew"].'</td>
										   <td>'.$row["callsign"].'</td>
										   <td>'.$row["firstname"].'</td>
										   <td>'.$row["lastname"].'</td>
										   <td>'.$row["sNumber"].'</td>
										   <td>'.$row["position"].'</td>
										   <td>'.$row["area"].'</td>
										   <td>'.$row["alternatephone"].'</td>
										   <td>'.$row["personalcell"].'</td>
										   <td>'.$row["workphone"].'</td>
										   <td>'.$row["workcell"].'</td>
										   ';
										   if(isset($_SESSION['login_user'])){ $table .= '<th width="355" height="15" align="left"><div align="left">
										   <a style="color:#000000;" href="editperson.php?id='.$row['id'].'">Edit</a><span style="color:#000000;"> / </span><a style="color:#000000;" href="deleteperson.php?id='.$row['id'].'">Delete</a></div></th>'; }
										   $table .= '
										</tr>
									';
								}$bgcolorcounter += 1;
							}echo $table;
						?>
					</tbody>
				</table>
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
	</div>
	</body>
</html>
	