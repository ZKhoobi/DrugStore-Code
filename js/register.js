$(document).ready(function () {
    $("#registeration").click(function () {
            var request = new XMLHttpRequest();
            var url = 'registeration.php';
 
			request.open("GET", url, true);
			request.setRequestHeader("Content-Type", "text/html");
			request.addEventListener("readystatechange", processData, false);
			request.send();
            //alert("ثبت نام انجام شد.");
            //window.location = "register.html";
			
			
    });
});

function processData(e){
	var currentReadyState = e.target.readyState;
	var currentStatus = e.target.status;
	// alert(e.target.responseText);
	if(currentReadyState == 4 && currentStatus == 200) {
		alert(this.responseText);
		
	}

		
}