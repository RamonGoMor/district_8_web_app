<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require 'sessionstart.php';
	require 'logout.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="_css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="_js/jquery-1.12.2.js "></script>
<script type="text/javascript" src="_js/jquerycode.js "></script>
<title>D8 TMC Web</title>
</head>
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
<body>

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

<div class="content">
	<div id="mainCon">
		<div id="logoPic"><a title="Home" href="#"><img class="homeLogo" src="_images/onlylogo.png"></img></a></div>
			<h1>D8 Transportation Management Center</h1>
			<div class="lgColMain" align="center">
				<a href="cal.php"><img class="squareLink" src="_images/calendar.png" alt="Calander" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a> 
				<a href="maps/index.php"><img class="squareLink" src="_images/MapsandContact.png"alt="Maps and Contacts"/></a>
				<a href="operating/index.php"><img class="squareLink" src="_images/SOP.png" alt="SOP"/></a>
				<a href="tmcApp/index.php"><img class="squareLink" src="_images/TMCApplications.png" alt="TMC Applications"/></a> 
				<a href="safety/index.php"><img class="squareLink" src="_images/Safety.png" alt="Safety"/></a>
				<a href="allied/agency_contacts/agency_contacts.php" ><img class="squareLink" src="_images/CONTACTS.png" alt="Allied Agencies"/></a>
				<a href="elements/index.php"><img class="squareLink" src="_images/elements.png" alt="TMC Elements"/></a> 
				<a href="trafficee/index.php"><img class="squareLink" src="_images/TrafficElectrical.png" alt="Traffic Electrical"/></a> 
				<a href="guidelines/index.php"><img class="squareLink" src="_images/Guidelines.png" alt="Guidelines"/></a>
					  
			</div>
		<div id="navBarIcons">
			<a target="_blank" href="http://forecast.weather.gov/MapClick.php?CityName=Fresno&state=CA&site=HNX&textField1=36.7478&textField2=-119.771&e=1"><img title="National Weather Service" class="navButton" src="_images/nws3.png" alt="NWS" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
			<a target="_blank" href="http://quickmap.dot.ca.gov/"><img title="Quick Maps" class="navButton" src="_images/quickmap.png" alt="Quick Maps"/></a>
			<a target="_blank" href="https://twitter.com/caltransdist6"><img title="Twitter" class="navButton" src="_images/Twitter.png" alt="Twitter"/></a>
			<a target="_blank" href="https://www.waze.com/livemap"><img title="Waze" class="navButton" src="_images/waze.png" alt="Waze"/></a>
			<a href="messageboard.php"><img title="Message board" class="navButton" src="_images/messageboard.png" alt="Message Board"/></a>
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