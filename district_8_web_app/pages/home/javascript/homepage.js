/*
GLOBAL VARIABLES
*/
var old_check_counters;


$(document).ready(function(){
	
});
function getRefresh(){
	$.get("php/getRefresh.php?id=1", function(data, status){
		
	});
}




















/*function getRefresh(x){
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp =  ActiveXObject("Microsoft.XMLHTTP");
    }
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				old_check_counters = this.responseText;
		}
    };
    xmlhttp.open("GET","php/getRefresh.php?id="+x,true);
    xmlhttp.send();
}*/