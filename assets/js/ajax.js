//File 		: ajax.js
//Nama		: Dian Parda Haryadi Simalango
//NIM		: 24010314120008

function getXMLHTTPRequest() {
	var req =  false;
	try {
		/* for Firefox and other browsers */
		req = new XMLHttpRequest(); 
	} catch (err) {
		try {
			/* for some versions of IE */
			req = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (err) {
			try {
				/* for some other versions of IE */
				req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (err) {
				req = false;
			}
		}
	}
	return req;
}

function getServerTime() {
	var thePage = 'servertime.php';
	myRand = parseInt(Math.random()*999999999999999);
	var theURL = thePage +"?rand="+myRand;
	xmlhttp.open("GET", theURL, true);
	xmlhttp.onreadystatechange = theHTTPResponse;
	xmlhttp.send(null);
}

function theHTTPResponse() {
	document.getElementById('showtime').innerHTML = '<img src="images/ajax_loader.png"/>';
	if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
		document.getElementById('showtime').innerHTML = xmlhttp.responseText;
	}
}

// Fungsi urlAjax
function callAjax(url,inner){
//  Inisisalisasi 
	var xmlhttp = getXMLHTTPRequest();
	// Fungsi untuk mengolah ajax
	xmlhttp.open('GET', url, true);
    xmlhttp.onreadystatechange = function() {
		document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
		if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
             document.getElementById(inner).innerHTML = xmlhttp.responseText;
        }
        return false;
    }
    xmlhttp.send(null);
}

function showCustomer(customerid){
	var inner = 'detail_customer';
	var url = 'get_customer.php?id=' + customerid;
	if(customerid == ""){
		document.getElementById(inner).innerHTML = '';
	}else{
		callAjax(url,inner);
	}
}