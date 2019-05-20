<?php
	require 'sessionstart.php';
	require 'logout.php'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="_css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="_css/main.css">
	<!--<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />-->
	<script type="text/javascript" src="_js/jquery-1.12.2.js "></script>
	<script type="text/javascript" src="_js/jquerycode.js "></script>
	<!-- <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script> -->
	<title>D8 Calendar</title>
</head>
<body>
	<div style="background:rgb(0,0,0);display:inline-block;width:100%;position:fixed;z-index:2;top:0;">
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
			<div style="width:100%;display:inline-block;">
				<div style="padding-left:5px;display: inline-block;color:white;width:7.5%;float:left;"><p style="font-size:16px;font-weight:700;">WELCOME, <?php echo $_SESSION["login_user"]?>.</span></p></div>
				<div style="display: inline-block;width:84%;float:left;text-align:center">
				 <a href="cal.php"><img title="Calendar" class="navButton" src="_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
					<a href="maps/index.php"><img title="Maps and Contacts" class="navButton" src="_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
					<a href="operating/index.php"><img title="SOP" class="navButton" src="_images/Small_SOP.png" alt="SOP"/></a>
					<a href="tmcApp/index.php"><img title="TMC Applications" class="navButton" src="_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
					<a href="safety/index.php"><img title="Safety" class="navButton" src="_images/Small_Safety.png" alt="Safety"/></a>
					<a href="allied/agency_contacts/agency_contacts.php" ><img title="Allied Agencies" class="navButton" src="_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
					<a href="elements/index.php"><img title="TMC Elements" class="navButton" src="_images/Small_Elements.png" alt="TMC Elements"/></a> 
					<a href="trafficee/index.php"><img title="Traffic Electical" class="navButton" src="_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
					<a href="guidelines/index.php"><img title="Guidelines" class="navButton" src="_images/Small_Guidelines.png" alt="Guidelines/References"/></a>
					<a href="messageboard.php"><img title="Message board" class="navButton" src="_images/messageboard.png" alt="Message Board"/></a>
				</div>
				<div style="display: inline-block;width:7.5%;float:left;"><form action="" method="post"><input type="hidden" name="logout" value="1"/><input class="headerbutton" type="submit" value="LOGOUT"/></form></div>
			</div>
		<?php } ?>
		<script>
			// Get the modal
			var modal = document.getElementById('id01');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>
	</div>
<div class="content">
<div id="mainCon">
<div id="logoPic"><a title="Home" href="index.php"><img class="homeLogo" src="_images/onlylogo.png"></img></a></div>
	<h1>D8 Calendar</h1>
    <div id="navBarIcons">
        <a href="cal.php"><img title="Calendar" class="navButton" src="_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
        <a href="maps/index.php"><img title="Maps and Contacts" class="navButton" src="_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
        <a href="operating/index.php"><img title="SOP" class="navButton" src="_images/Small_SOP.png" alt="SOP"/></a>
        <a href="tmcApp/index.php"><img title="TMC Applications" class="navButton" src="_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
        <a href="safety/index.php"><img title="Safety" class="navButton" src="_images/Small_Safety.png" alt="Safety"/></a>
        <a href="allied/agency_contacts/agency_contacts.php" ><img title="Allied Agencies" class="navButton" src="_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
        <a href="elements/index.php"><img title="TMC Elements" class="navButton" src="_images/Small_Elements.png" alt="TMC Elements"/></a> 
        <a href="trafficee/index.php"><img title="Traffic Electical" class="navButton" src="_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
        <a href="guidelines/index.php"><img title="Guidelines" class="navButton" src="_images/Small_Guidelines.png" alt="Guidelines/References"/></a>
        <a href="messageboard.php"><img title="Message board" class="navButton" src="_images/messageboard.png" alt="Message Board"/></a>
 
    </div>
	<div class="row" align="center">
    	  <img src="_images/Cal.PNG" class="cal" width="800" height="auto" style="padding-bottom: 35px" />
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
