<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require '../../sessionstart.php';
	require '../../addagency.php';
	require '../../logout.php';
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
<script type="text/javascript" src="/_js/jquery.tabledit.min.js"></script>
<script type="text/javascript" src="/_js/jquery.tabledit.js"></script>
<script>

	$(document).ready(function(){
		$('#mainTable').Tabledit({
			url: 'tableedit.php',
			hideIdentifier: true,
			restoreButton: false,
			buttons: {
				edit: {
					class: 'tablebutton',
					html: 'Edit',
					action: 'edit'
				},
				delete: {
					class: 'tablebutton',
					html: 'Delete',
					action: 'delete'
				},
				save: {
					class: 'tablebutton',
					html: 'Save'
				},
				restore: {
					class: 'tablebutton',
					html: 'Restore',
					action: 'restore'
				},
				confirm: {
					class: 'tablebutton',
					html: 'Confirm'
				},
			},
			columns: {
				identifier: [0, 'id'],
				editable: [[1, 'agencyname'],[2, 'agencytype'], [3, 'contactnumber'], [4, 'comment']]
			}

		});
	});
</script>


	<title>D8 Agency Contacts</title>
<!--<link rel="stylesheet" href="../miscellaneous/site-wide_styles/tmcstyles.css" type="text/css">
--><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="../../_js/swfobject.js"></script>
</head>
<body>
<div style="display:block;background:rgb(0,0,0);display:inline-block;width:100%;position:fixed;z-index:2;top:0;">
		<?php if( !isset($_SESSION["login_user"])){ ?>
			<button onclick="document.getElementById('id01').style.display='block'" class="headerbutton">Login</button>

			<div id="id01" class="modal">
			  
			  <form class="modal-content animate" action="" method="post">
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
			<button onclick="document.getElementById('id02').style.display='block'" class="headerbutton"style="display: inline-block;float:right;">Add Agency</button>
			<div id="id02" class="modal2">
			  
			  <form class="modal2-content animate2" action="" method="post">
				<div class="container">
				  <label for="agencyname"><b>Agency</b></label>
				  <input type="text" placeholder="Enter Agency" name="agencyname">

				  <label for="agencytype"><b>Agency Type</b></label>
				  <input type="text" placeholder="Enter Agency Type" name="agencytype" required>
				  
				  <label for="contactnumber"><b>Contact Number</b></label>
				  <input type="text" placeholder="Enter Contact Number" name="contactnumber" >
				  
				  <label for="comment"><b>Comment</b></label>
				  <input type="text" placeholder="Enter Comment" name="comment" >
				  
					
				  <button value="Submit" type="submit">Save</button>
				</div>

				<div class="container" style="background-color:#f1f1f1">
				  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
			  </form>
			</div>
		<?php } ?>

	</div>
    <div class="content">
    <div id="mainCon">
    <div id="logoPic"><a title="Home" href="../../index.php"><img class="homeLogo" src="../../_images/onlylogo.png"></img></a></div>
   	<h1>D8 Allied Agency</h1>
    <!-- Sets up main column -->
    <div id="navBarIcons">
        <a href="../../cal.php"><img title="Calendar" class="navButton" src="../../_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
        <a href="../../maps/index.php"><img title="Maps and Contacts" class="navButton" src="../../_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
        <a href="../../operating/index.php"><img title="SOP" class="navButton" src="../../_images/Small_SOP.png" alt="SOP"/></a>
        <a href="../../tmcApp/index.php"><img title="TMC Applications" class="navButton" src="../../_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
        <a href="../../safety/index.php"><img title="Safety" class="navButton" src="../../_images/Small_Safety.png" alt="Safety"/></a>
        <a href="../../allied/agency_contacts/agency_contacts.php"><img title="Allied Agencies" class="navButton" src="../../_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
        <a href="../../elements/index.php"><img title="TMC Elements" class="navButton" src="../../_images/Small_Elements.png" alt="TMC Elements"/></a> 
        <a href="../../trafficee/index.php"><img title="Traffic Electical" class="navButton" src="../../_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
        <a href="../../guidelines/index.php"><img title="Guidelines" class="navButton" src="../../_images/Small_Guidelines.png" alt="Guidelines/References"/></a>
        <a href="../../messageboard.php"><img title="Message board" class="navButton" src="../../_images/messageboard.png" alt="Message Board"/></a>
 
    </div>
	<p><b>&nbsp;&nbsp;Select Agency Name/Type And Click 'Search':<b><br /></p>
		<form id ="agencynameform" action="#" method='post'> <h4>&nbsp;&nbsp;Agency Name: <select class="form-dropdown validate[required]" style="width;150px;" id="agencynameinput" name="dpl_agencyname" form="agencynameform"></h4>
		<!--<option value="0">-</option>-->
		<option value="allagency">-All Agency Contacts-</option>
		<?php
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "myDB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT DISTINCT agencyname FROM agencycontacts ORDER BY agencyname ASC";
		$result = $conn->query($sql);
		$menu = " ";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$menu .= "<option value=".md5($row["agencyname"]).">".$row["agencyname"]."</option>";
			}
		} else {
			echo "0 results";
		}
		echo $menu;
		$conn->close();
		?>
	</select>
	<input type="submit" value="Submit" />
   </form>
   <div>&nbsp;</div>
	<form id ="agencytypeform" action="#" method='post'> <h4>&nbsp;&nbsp;Agency Type: <select class="form-dropdown validate[required]" style="width;150px;" id="agencytypeinput" name="dpl_agencytype" form="agencytypeform"></h4>
		<!--<option value="0">-</option>-->
		<option value="allagency">-All Agency Contacts-</option>
		<?php
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "myDB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT DISTINCT agencytype FROM agencycontacts ORDER BY agencytype ASC";
		$result = $conn->query($sql);
		$menu = " ";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$menu .= "<option value=".md5($row["agencytype"]).">".$row["agencytype"]."</option>";
			}
		} else {
			echo "0 results";
		}
		echo $menu;
		$conn->close();
		?>
	</select>
	<input type="submit" value="Submit" />
   </form>
   <div>&nbsp;</div>
   <div>
   <?php if(isset($_SESSION['login_user'])){?>
		<table id="mainTable" class="linkTable noHover" border="0" cellspacing="1" cellpadding="1" align="left" style="width: 75%; margin-right: 12.5%; margin-left: 12.5%">
   <?php } else { ?>
		<table id="Table" class="linkTable noHover" border="0" cellspacing="1" cellpadding="1" align="left" style="width: 75%; margin-right: 12.5%; margin-left: 12.5%">
   <?php } ?>
   
     <thead>
      <tr style="background-color:rgb(0,52,102);"><th width="255" height="15" align="left" style="display:none;"><div align="left">id</div></th>
       <th width="255" height="15" align="left"><div align="left"><span style="color:#ffffff;">Agency</span></div></th>
       <th width="255" height="15" align="left"><div align="left"><span style="color:#ffffff;">Agency Type</span></div></th>
       <th width="255" height="15" align="left"><div align="left"><span style="color:#ffffff;">Contact Number</span></div></th>
	   <th width="355" height="15" align="left"><div align="left"><span style="color:#ffffff;">Comment</span></div></th>
      </tr>
     </thead>
     <tbody>
     <?php
	if(isset($_POST['dpl_agencytype']) && !isset($_POST['dpl_agencyname'])){ 
		tablecreate("agencytype",$_POST['dpl_agencytype']);
	}
	if(isset($_POST['dpl_agencyname']) && !isset($_POST['dpl_agencytype']) ){ 
		tablecreate("agencyname",$_POST['dpl_agencyname']);
	}
	if(!isset($_POST['dpl_agencytype']) && !isset($_POST['dpl_agencytype']) ){
		tablecreate("agencytype","allagency");
	}
	 function tablecreate($temp,$filter){
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "myDB";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT id,agencyname,agencytype,contactnumber,comment FROM agencycontacts ORDER BY agencyname, agencytype ASC";
		$result = $conn->query($sql);
		$bgcolorcounter=1;
		 while($row = $result->fetch_assoc()){
			if( $filter == md5($row[$temp]) || $filter=="allagency"){
				if($bgcolorcounter%2==1){
				  echo '
				   <tr style="background-color:#CCCCCC">
				   <td style="display:none;">'.$row["id"].'</td>
				   <td>'.$row["agencyname"].'</td>
				   <td>'.$row["agencytype"].'</td>
				   <td>'.$row["contactnumber"].'</td>
				   <td>'.$row["comment"].'</td>
				  </tr>
				  ';
				}else{
					echo '
				   <tr style="background-color:#EFEFEF">
				   <td style="display:none;">'.$row["id"].'</td>
				   <td>'.$row["agencyname"].'</td>
				   <td>'.$row["agencytype"].'</td>
				   <td>'.$row["contactnumber"].'</td>
				   <td>'.$row["comment"].'</td>
				  </tr>
				  ';
				}$bgcolorcounter += 1;
			}
		 }
	 }
     ?>
     </tbody>
    </table>
   </div>
</div>
<div id="navBarIcons">
        <a href="../../cal.php"><img title="Calendar" class="navButton" src="../../_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
        <a href="../../maps/index.php"><img title="Maps and Contacts" class="navButton" src="../../_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
        <a href="../../operating/index.php"><img title="SOP" class="navButton" src="../../_images/Small_SOP.png" alt="SOP"/></a>
        <a href="../../tmcApp/index.php"><img title="TMC Applications" class="navButton" src="../../_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
        <a href="../../safety/index.php"><img title="Safety" class="navButton" src="../../_images/Small_Safety.png" alt="Safety"/></a>
        <a href="../../allied/agency_contacts/agency_contacts.php"><img title="Allied Agencies" class="navButton" src="../../_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
        <a href="../../elements/index.php"><img title="TMC Elements" class="navButton" src="../../_images/Small_Elements.png" alt="TMC Elements"/></a> 
        <a href="../../trafficee/index.php"><img title="Traffic Electical" class="navButton" src="../../_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
        <a href="../../guidelines/index.php"><img title="Guidelines" class="navButton" src="../../_images/Small_Guidelines.png" alt="Guidelines/References"/></a>
        <a href="../../messageboard.php"><img title="Message board" class="navButton" src="../../_images/messageboard.png" alt="Message Board"/></a>
 
    </div>

 </select>
 <footer>
    <table align="center" class="footerTable">
    	<tr>
        	<th colspan="6"></th>
        </tr>
    	<tr>
        <td></td>
    		<td><a class="footerLink" href="../links/index.php">External Links</a>
    		<a class="footerLink" href="../about/index.php">About Us/Contact information</a>
    		<a class="footerLink" href="../deoc/index.php">DEOC</a>
            <a class="footerLink" href="../biz/index.php">Index</a></td>
        <td></td>
        </tr>
    </table>
    </footer> 
	</div>	
</body>
</html>
