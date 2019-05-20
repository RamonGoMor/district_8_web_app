<?php 
	require '../sessionstart.php';
	require '../logout.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../_css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="dist/css/lightbox.min.css"/>
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
<title>D8 Maps and Contact</title>
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
<body>
    <div class="content">
    <div id="mainCon">
    <div id="logoPic"><a title="Home" href="../index.php"><img class="homeLogo" src="../_images/onlylogo.png"></img></a></div>
    	<h1>D8 Maps and Contact Information</h1>
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
        <a href="../messageboard.php"><img title="Message board" class="navButton" src="../../_images/messageboard.png" alt="Message Board"/></a>
 
    </div>
    	
        <!-- Sets up information in the left column -->
    	<div class="lgCol">
			<table class="linkTable" style="margin-left:60px; margin-right:auto" align="center">
        		<tr>
            		<th colspan="2" class="tableTitle left">Callout</th>
          		</tr>
          		
                <tr>
                	<td> <a   href="callout.php"><img class="squareLinkTable" src="../_images/calloutMapimg.png" width="275" height="175" alt="Callout Map" /></a></td>
            	    <td> <a   href="../maps/construction.php"><img class="squareLinkTable" src="../_images/constructionMap.png" width="275" height="175" alt="District Construction" /></a></td>
          		</tr>
          		
                <tr>
            		<td><a   href="http://quickmap.dot.ca.gov/"><img class="squareLinkTable" src="../_images/Quickmaps.png" width="275" height="175" alt="Quickmaps" /></a></td>
            		<td><a   href="http://d06web/tmc/tmc_internal/2016/Appendices/Appendix%2028_TMC_Contacts.pdf"><img class="squareLinkTable" src="../_images/TMCContacts.png" width="275" height="175" alt="TMC Contacts" /></a></td>
          		</tr>
        	</table>
            
        	<div class="row">
            	<a   href="../maps/mapfiles/PhoneList.pdf" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('phoneList','','../_images/Bestseller.png',1)"><img class="buttonLink" src="../_images/Bestseller.png" alt="D8 Best Seller"/></a>
 
       	</div>
            
      		<table border="0" align="center" id="zoom" class="linkTable left" style="margin-left:150px; margin-right:auto;">
      			<tr>
            		<th colspan="3" class="tableTitle">Zoom</th>
          		</tr>
                
      			<tr>
        			<td><a   href="https://district8.onramp.dot.ca.gov/node/580"><img class="squareLinkTable" src="../_images/zoom/DTM_AreaMap.png" style="width:200; height:200" alt="DTM Area Map" /></a></td>
                   	<td><a   href="https://district8.onramp.dot.ca.gov/node/578"><img class="squareLinkTable" src="../_images/zoom/TrafficSignOpMap.png" style="width:200; height:20" alt="CT Districts Map" /></a></td>
                </tr>
                <tr>
                   	<td><a   href="http://d06web/tmc/tmc_internal/2016/Appendices/Appendix%2005_CHP_dispatch_Centers.pdf"><img class="squareLinkTable" src="../_images/zoom/CT_CHP_Sectors.png" style="width:200; height:200" alt="CT/CHP Sectors Map" /></a></td>        
			        <td><a   href="http:\\northregion.dot.ca.gov/rtmc/maps/mapFiles/CT_Districts.pdf"><img class="squareLinkTable" src="../_images/zoom/CT_Districts.png" style="width:200; height:200" alt="CT Districts Map" /></a></td>
    			</tr>
   			</table>
			
          </div>
        <!-- The right column -->
        <div class="lgCol">
         <table class="linkTableLarge right" border="0">
          <tr>
            <th colspan="2" class="tableTitle">Electrical Services</th>
          </tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=831">831 | East Electrical</th>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=833">833 | West Electrical</th>
          </tr>
          <tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=834">834 | North Electrical</th>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=835">835 | South Electrical</th>
          <tr>
          <th class='clickable-row' data-href="../allied/callout_map/crewcallout.php?crew=832">832 | Central/Metro Electrical</th>
          </tr>
          </tr>
        </table>
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
            <th colspan="2" class="tableTitle">Maintenance Support</th>
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
        <a href="../messageboard.php"><img title="Message board" class="navButton" src="../../_images/messageboard.png" alt="Message Board"/></a>

    </div>
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
