<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require '../sessionstart.php';
	require '../logout.php';
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
<title>D8 Callout Map</title>
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
		<div style="display: inline-block;float:right;"><form action="" method="post"><input type="hidden" name="logout" value="1"/><input class="headerbutton" type="submit" value="LOGOUT"/></form></form></div>
	<?php } ?>
		
</div>
<body>
    <div class="content">
    <div id="mainCon">
    <div id="logoPic"><a title="Home" href="../index.php"><img class="homeLogo" src="../_images/onlylogo.png"></img></a></div>
   	<h1>D8 Callout Map</h1>
    <!-- Sets up main column -->
    <div id="navBarIcons">
        <a href="../cal.php"><img title="Calendar" class="navButton" src="../_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
        <a href="../maps/index.php"><img title="Maps and Contacts" class="navButton" src="../_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
        <a href="../operating/index.php"><img title="SOP" class="navButton" src="../_images/Small_SOP.png" alt="SOP"/></a>
        <a href="../tmcApp/index.php"><img title="TMC Applications" class="navButton" src="../_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
        <a href="../safety/index.php"><img title="Safety" class="navButton" src="../_images/Small_Safety.png" alt="Safety"/></a>
        <a href="../allied/agency_contacts/agency_contacts.php" ><img title="Allied Agencies" class="navButton" src="../_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
        <a href="../elements/index.php"><img title="TMC Elements" class="navButton" src="../_images/Small_Elements.png" alt="TMC Elements"/></a> 
        <a href="../trafficee/index.php"><img title="Traffic Electical" class="navButton" src="../_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
        <a href="../guidelines/index.php"><img title="Guidelines" class="navButton" src="../_images/Small_Guidelines.png" alt="Guidelines/References"/></a>
        <a href="../messageboard.php"><img title="Message board" class="navButton" src="../_images/messageboard.png" alt="Message Board"/></a>
 
    </div>
    <div class="row" style="margin-bottom: 20px">
        	<div class="lgCol">
            <div class="dropdown">
            	<img class="dropbtn" src="../_images/specCrews.png" />
                <div class="dropdown-content" align="center">
    				<table style="width: 100%; margin-bottom:0" align="Center" class="linkTable">
          				<tr>
            				<th colspan="2" class="tableTitle">Special Crews</th>
          				</tr>
                        <tr>
            				<th class='clickable-row' style="width: 50%" scope="row" data-href="../maps/SCMaintenance.php">Maintenance</th>
           				</tr>
          				<tr>
            				<th class='clickable-row' style="width: 50%" scope="row" data-href="../maps/SCAdministration.php">District Office | Administration</th>
          				</tr>
        			</table>
  				</div>
              </div>
            </div>
            <div class="lgCol">
            <div class="dropdown">
            	<img class="dropbtn" src="../_images/electricalCrews.png" style="margin-top:15px; display:inline-block;" />
                <div class="dropdown-content" align="center">
                 <table style="width:100%; margin-bottom: 0" class="linkTable" border="0">
          			<tr>
            			<th colspan="2" class="tableTitle">Electrical Services</th>
          			</tr>
          <tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=831">831 | East Electrical</th>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=833">833 | West Electrical</th>
          </tr>
          <tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=834">834 | North Electrical</th>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=835">835 | South Electrical</th>
          <tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=832">832 | Central/Metro Electrical</th>
          </tr>
 	</table>
    </div>
   </div>
  </div>
   
    	<div class="row">
		<img src="../_images/D08_Calloutmap_V4.png" width="1260" height="1236" usemap="#Map" border="0" />
<map name="Map" id="Map">
<!--- Crew Number Buttons --->

<!--- 600's --->
  <area shape="rect" coords="46,1010,109,1044" href="../allied/callout_map/crewcallout.php?crew=611"  title="611" alt="611" />
  <area shape="rect" coords="124,1009,186,1044" href="../allied/callout_map/crewcallout.php?crew=612"   title="612" alt="612" />
  <area shape="rect" coords="201,1009,264,1044" href="../allied/callout_map/crewcallout.php?crew=613"   title="613" alt="613" />
  <area shape="rect" coords="276,1010,339,1044" href="../allied/callout_map/crewcallout.php?crew=614"   title="614" alt="614" />
  <area shape="rect" coords="358,1009,420,1043" href="../allied/callout_map/crewcallout.php?crew=621"   title="621" alt="621" />
  <area shape="rect" coords="47,1068,110,1104" href="../allied/callout_map/crewcallout.php?crew=622"   title="622" alt="622" />
  <area shape="rect" coords="123,1069,185,1104" href="../allied/callout_map/crewcallout.php?crew=623"   title="623" alt="623" />
  <area shape="rect" coords="201,1069,263,1104" href="../allied/callout_map/crewcallout.php?crew=624"   title="624" alt="624" />
  <area shape="rect" coords="276,1069,339,1104" href="../allied/callout_map/crewcallout.php?crew=631"   title="631" alt="631" />
  <area shape="rect" coords="358,1069,420,1104" href="../allied/callout_map/crewcallout.php?crew=632"   title="632" alt="632" />
  <area shape="rect" coords="46,1125,109,1160" href="../allied/callout_map/crewcallout.php?crew=633"   title="633" alt="633" />
  <area shape="rect" coords="123,1125,185,1160" href="../allied/callout_map/crewcallout.php?crew=634"   title="634" alt="634" />
  <area shape="rect" coords="201,1126,263,1161" href="../allied/callout_map/crewcallout.php?crew=635"   title="635" alt="635" />
  <area shape="rect" coords="276,1125,338,1160" href="../allied/callout_map/crewcallout.php?crew=641"   title="641" alt="641" />
  <area shape="rect" coords="359,1125,421,1160" href="../allied/callout_map/crewcallout.php?crew=643"   title="643" alt="643" />
  
<!--- 700's ---> 
  
  <area shape="rect" coords="445,1009,508,1044" href="../allied/callout_map/crewcallout.php?crew=711"   title="711" alt="711" />
  <area shape="rect" coords="527,1009,589,1043" href="../allied/callout_map/crewcallout.php?crew=712"   title="712" alt="712" />
  <area shape="rect" coords="612,1009,675,1044" href="../allied/callout_map/crewcallout.php?crew=713"   title="713" alt="713" />
  <area shape="rect" coords="699,1010,760,1043" href="../allied/callout_map/crewcallout.php?crew=715"   title="715" alt="715" />
  <area shape="rect" coords="776,1009,839,1045" href="../allied/callout_map/crewcallout.php?crew=721"   title="721" alt="721" />
  <area shape="rect" coords="445,1070,507,1104" href="../allied/callout_map/crewcallout.php?crew=722"   title="722" alt="722" />
  <area shape="rect" coords="527,1069,588,1104" href="../allied/callout_map/crewcallout.php?crew=723"   title="723" alt="723" />
  <area shape="rect" coords="612,1070,674,1104" href="../allied/callout_map/crewcallout.php?crew=724"   title="724" alt="724" />
  <area shape="rect" coords="699,1069,761,1103" href="../allied/callout_map/crewcallout.php?crew=741"   title="741" alt="741" />
  <area shape="rect" coords="776,1069,838,1103" href="../allied/callout_map/crewcallout.php?crew=742"   title="742" alt="742" />
  <area shape="rect" coords="446,1125,508,1160" href="../allied/callout_map/crewcallout.php?crew=743"   title="743" alt="743" />
  <area shape="rect" coords="527,1125,589,1159" href="../allied/callout_map/crewcallout.php?crew=744"   title="744" alt="744" />
  <area shape="rect" coords="613,1125,674,1159" href="../allied/callout_map/crewcallout.php?crew=745"   title="745" alt="745" />
  <area shape="rect" coords="699,1125,761,1160" href="../allied/callout_map/crewcallout.php?crew=761"   title="761" alt="761" />
  <area shape="rect" coords="776,1126,838,1160" href="../allied/callout_map/crewcallout.php?crew=762"   title="762" alt="762" />
  <area shape="rect" coords="448,1180,512,1215" href="../allied/callout_map/crewcallout.php?crew=763"   title="763" alt="763" />
  <area shape="rect" coords="527,1180,589,1214" href="../allied/callout_map/crewcallout.php?crew=764"   title="764" alt="764" />
  
<!--- 800's --->  
  
  <area shape="rect" coords="864,1010,927,1044" href="../allied/callout_map/crewcallout.php?crew=841"   title="841" alt="841" />
  <area shape="rect" coords="944,1009,1004,1044" href="../allied/callout_map/crewcallout.php?crew=842"   title="842" alt="842" />
  <area shape="rect" coords="1019,1008,1081,1044" href="../allied/callout_map/crewcallout.php?crew=843"   title="843" alt="843" />
  <area shape="rect" coords="1098,1011,1160,1044" href="../allied/callout_map/crewcallout.php?crew=844"   title="844" alt="844" />
  <area shape="rect" coords="1175,1009,1237,1044" href="../allied/callout_map/crewcallout.php?crew=851"   title="851" alt="851" />
  <area shape="rect" coords="864,1069,926,1102" href="../allied/callout_map/crewcallout.php?crew=852"   title="852" alt="852" />
  <area shape="rect" coords="943,1068,1006,1103" href="../allied/callout_map/crewcallout.php?crew=853"   title="853" alt="853" />

<!--- End Crew Number Buttons --->

</map>

      	</div>
    </div>
		 <div id="navBarIcons">
        <a href="../cal.php"><img title="Calendar" class="navButton" src="../_images/Small_Calendar.png" alt="Calendar" name="boxIMG" id="boxIMG" onclick ="calPop()" /></a>
        <a href="../maps/index.php"><img title="Maps and Contacts" class="navButton" src="../_images/Small_MapsandContact.png"alt="Maps and Contacts"/></a>
        <a href="../operating/index.php"><img title="SOP" class="navButton" src="../_images/Small_SOP.png" alt="SOP"/></a>
        <a href="../tmcApp/index.php"><img title="TMC Applications" class="navButton" src="../_images/Small_TMCApplications.png" alt="TMC Applications"/></a> 
        <a href="../safety/index.php"><img title="Safety" class="navButton" src="../_images/Small_Safety.png" alt="Safety"/></a>
        <a href="../allied/agency_contacts/agency_contacts.php" ><img title="Allied Agencies" class="navButton" src="../_images/Small_CONTACTS.png" alt="Allied Agencies"/></a>
        <a href="../elements/index.php"><img title="TMC Elements" class="navButton" src="../_images/Small_Elements.png" alt="TMC Elements"/></a> 
        <a href="../trafficee/index.php"><img title="Traffic Electical" class="navButton" src="../_images/Small_TrafficElectrical.png" alt="Traffic Electrical"/></a> 
        <a href="../guidelines/index.php"><img title="Guidelines" class="navButton" src="../_images/Small_Guidelines.png" alt="Guidelines/References"/></a>
        <a href="../messageboard.php"><img title="Message board" class="navButton" src="../_images/messageboard.png" alt="Message Board"/></a>
 
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
    		<a class="footerLink" href="../deoc/index.php">DEOC</a>
            <a class="footerLink" href="../biz/index.php">Index</a></td>
        <td></td>
        </tr>
    </table>
    </footer>
    </div>
</body>
</html>