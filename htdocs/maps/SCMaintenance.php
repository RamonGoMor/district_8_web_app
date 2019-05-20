<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require '../sessionstart.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../_css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../_js/jquery-1.12.2.js "></script>
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
<script type="text/javascript" src="../_js/jquerycode.js "></script>
<title>D8 Special Crew-Maintenance</title>
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
    <div id="logoPic"><a title="Home" href="../index.php"><img src="../_images/onlylogo.png"></img></a>
    </div>
    	<h1>D8 Special Crew-Maintenance</h1>
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
           <tr>
            <th colspan="2" class="tableTitle">Special Services</th>
          </tr>
          <tr> 
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=811">811 | Striping/Pavement Marking</th>     
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=812">812 | Bridge Crew</th> 
        
	      </tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=813">813 | Sign Crew</th>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=814">814 | Guardrail</th> 
          </tr>
          <tr> 
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=815">815 | Storm Water</th>
		  </tr>
          </tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=644">644 | North Tree Crew</th>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=854">854 | Metro Tree Crew</th>
          </tr>
       	</table>
        
           <table class="linkTableLarge right" border="0">
          
          <tr>
            <th colspan="2" class="tableTitle">Metro Landscape (LS)</th>
          </tr>
          <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=844">844 | Metro LS</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=852">852 | Ontario LS</th>
          </tr>
            
          </tr>
          <tr>
           <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=853">853 | Upland LS</th>
          </tr>
          </table>
           <table class="linkTableLarge right" border="0">
          
          <tr>
            <th colspan="2" class="tableTitle">North Landscape  (LS)</th>
          </tr>
          <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=642">642 | Rancho LS</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=643"> 643| Fontana LS</th>
          </tr>
          </table>
          
 </div>
  <div class="lgCol">
           <table class="linkTableLarge right" border="0">
          
          <tr>
            <th colspan="2" class="tableTitle">South Landscape (LS)</th>
          </tr>
          <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=715">715 | Banning LS</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=724">724 | Riverside LS</th>
          </tr>
            
          </tr>
          <tr>
           <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=744">744 | Indio LS</th>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=762">762 | Temecula LS</th> </tr>
          <tr>
         
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=764">764 | Corona LS</th>
          </tr>
          </table>
          
          <table class="linkTableLarge right" border="0">
          
          <tr>
            <th colspan="2" class="tableTitle">SWP/Spray Crews</th>
          </tr>
          <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=842">842 | Metro Sweeping and Grafitti</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=843">843 | Metro Spray</th>
           </tr>
          <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=722">722 | Riverside SWP</th>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=723">723 | Riverside SWP/Spray</th>
          </tr>
           <tr>
            <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=764">764 | Corona SWP</th>
          </tr>
          </table>
          
         <table class="linkTableLarge right" border="0">
          <tr>
            <th colspan="2" class="tableTitle">Region Managers</th>
          </tr>
<!--          <tr>
          <th class='clickable-row' data-href="../allied//callout_map/crewcallout.php?crew=RegionManager" scope="row" height="30px">Region Managers | Personnel</th>
          </tr>
-->        </table>
		
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

        <td></td>
        </tr>
    </table>
    </footer>
 </div>
  
</body>
</html>
