<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require '../sessionstart.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../_css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../_js/jquery-1.12.2.js "></script>
<script type="text/javascript" src="../_js/jquerycode.js "></script>
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
<title>D8 Special Crew-Adminstration</title>
</head>
<div style="display:block;background:rgb(0,0,0);display:inline-block;width:100%; position:relative;top:0;">
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
		<div style="display: inline-block;float:right;"><form action="logout.php"><input class="headerbutton" type="submit" value="LOGOUT"/></form></div>
	<?php } ?>
		
</div>
<body>
    <div class="content">
    <div id="mainCon">
    <div id="logoPic"><a title="Home" href="../index.php"><img src="../_images/onlylogo.png"></img></a></div>
    	<h1>D8 Special Crew-Administration</h1>
        <div id="navBarIcons">
        <a href="../cal.php"><img title="Calendar" class="navButton" src="../_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
        <a href="../maps/index.php"><img title="Maps and Contacts" class="navButton" src="../_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
        <a href="../operating/index.php"><img title="SOP" class="navButton" src="../_images/Small_SOP.png" alt="SOP"/></a>
        <a href="../tmcApp/index.php"><img title="TMC Applications" class="navButton" src="../_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
        <a href="../safety/index.php"><img title="Safety" class="navButton" src="../_images/Small_Safety.png" alt="Safety"/></a>
        <a href="../allied/agency_contacts/agency_contacts.php" target="new"><img title="Allied Agencies" class="navButton" src="../_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
        <a href="../elements/index.php"><img title="TMC Elements" class="navButton" src="../_images/Small_Elements.png" alt="TMC Elements"/></a> 
        <a href="../trafficee/index.php"><img title="Traffic Electical" class="navButton" src="../_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
        <a href="../guidelines/index.php"><img title="Guidelines" class="navButton" src="../_images/Small_Guidelines.png" alt="Guidelines/References"/></a> 
        <a href="../messageboard.php"><img title="Message board" class="navButton" src="http://d06webt/tmc/d8test/_images/messageboard.png" alt="Message Board"/></a>
    </div>
    	<!-- Sets up information in the left column -->
    	<div class="lgCol">
                <table class="linkTableLarge right" border="0">

<!--       <table align="left" class="linkTable right">
-->          <tr>
            <th colspan="3" class="tableTitle">Maintenance Support</th>
          </tr>
             <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=600">600 | Maintenace Branch</th>

           </tr>
          <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=601">601 | MTCE Support</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=602">602 | MTCE Support</th>
          </tr>
            <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=603">603 | MTCE Support/Field</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=604">604 | MTCE Support</th>
          </tr>
          <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=606">606 | Shipping/Receiving</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=698">698 | Equipment Shop</th>
          </tr>
         </table>
         <table class="linkTableLarge right" border="0">
            
          <tr>
            <th colspan="3" class="tableTitle">Maintenance Engineering</th>
          </tr>
           <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=608">Project Mgmt.</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=605">Engineering Design North</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=607">Engineering Design South</th> </tr>
           <tr>
         
            
           </tr>
               
          </table>
        <table class="linkTableLarge right" border="0">
            
          <tr>
            <th colspan="3" class="tableTitle">Region Office(s)</th>
          </tr>
           <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=890">890 | Metro Region</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=690">690 | North Region</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=790">790 | South Region</th> </tr>
           <tr>
         </tr>
 </table>
  		</div>         
	</div>
</div>
    <div id="navBarIcons">
        <a href="../cal.php"><img title="Calendar" class="navButton" src="../_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
        <a href="../maps/index.php"><img title="Maps and Contacts" class="navButton" src="../_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
        <a href="../operating/index.php"><img title="SOP" class="navButton" src="../_images/Small_SOP.png" alt="SOP"/></a>
        <a href="../tmcApp/index.php"><img title="TMC Applications" class="navButton" src="../_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
        <a href="../safety/index.php"><img title="Safety" class="navButton" src="../_images/Small_Safety.png" alt="Safety"/></a>
        <a href="../allied/agency_contacts/agency_contacts.php" target="new"><img title="Allied Agencies" class="navButton" src="../_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
        <a href="../elements/index.php"><img title="TMC Elements" class="navButton" src="../_images/Small_Elements.png" alt="TMC Elements"/></a> 
        <a href="../trafficee/index.php"><img title="Traffic Electical" class="navButton" src="../_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
        <a href="../guidelines/index.php"><img title="Guidelines" class="navButton" src="../_images/Small_Guidelines.png" alt="Guidelines/References"/></a> 
        <a href="../messageboard.php"><img title="Message board" class="navButton" src="http://d06webt/tmc/d8test/_images/messageboard.png" alt="Message Board"/></a>
    </div>
    <footer>
    <table align="center" class="footerTable">
    	<tr>
        	<th colspan="6"></th>
        </tr>
    	<tr>
        <td></td>
    		<td><a class="footerLink" href="../links/index.php">External Links</a>
    		<a class="footerLink" href="../about/index.php">About Us/Contact information</a>
    		<a class="footerLink" href="../deoc/index.php">TMC TnT Academy</a>
            <a class="footerLink" href="../biz/index.php">Index</a></td>

        <td>
        </td>
        </tr>
    </table>
    </footer>
    </div>
</body>
</html>
