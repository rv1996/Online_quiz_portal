// JavaScript Document
function jstophp(url,cfunc){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      cfunc(xhttp);
      }
    }
    xhttp.open("GET", url, true);
    xhttp.send();
	}