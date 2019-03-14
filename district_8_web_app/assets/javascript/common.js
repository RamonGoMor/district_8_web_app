var active_dropdown = false;
$(document).ready(function(){
	startTime();
	$("#navbar-icon").click(function(){
		$(".header-navbar").toggleClass("visible");
	});
	$(".navbar-dropdown-title").click(function(){
		if(active_dropdown === false){
			$(this).siblings(".navbar-dropdown-content:first").toggleClass("navbar-dropdown-content-active");
			active_dropdown = $(this).siblings(".navbar-dropdown-content:first");
		}else{
			if( active_dropdown.html() === $(this).siblings(".navbar-dropdown-content:first").html() ){
				active_dropdown.toggleClass("navbar-dropdown-content-active");
				active_dropdown = false;
			}else{
				active_dropdown.toggleClass("navbar-dropdown-content-active");
				$(this).siblings(".navbar-dropdown-content:first").toggleClass("navbar-dropdown-content-active");
				active_dropdown = $(this).siblings(".navbar-dropdown-content:first");
			}
		}
	});
	$(".clickable").click(function(){
		$(".modal").toggleClass("visible");
	});
	$(".modal-close").click(function(){
		$(".modal").toggleClass("visible");
	});
	$("#login").click(function(){
		$(".modal").toggleClass("visible");
	});
	$("#test").click(function(){
		$(".modal-content").html(" ");
	});
	
});

function startTime() {
    var today = new Date();
	var n = today.toDateString();
	n = createDate(n);
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
 	document.getElementById('date').innerHTML = n;
    document.getElementById('time').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
function createDate(n){
	var res = n.split(" ");
	for(x = 0; x < res.length;x++){
		if(x==0){
			n = res[x]+", "
		}else if(x==2){
			n += res[x]+", "
		}else{
			n += res[x]+" "
		}
	}
	return n;
}
function getXMLHTTP(){
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest();
    } else {
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}