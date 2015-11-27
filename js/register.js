/* $(document).ready(function () {
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
}); */
$(document).ready(function(){
	
	$('#regForm').submit(function(e) {

		register();
		e.preventDefault();
		
	});
	
});


function register()
{
	hideshow('loading',1);
	error(0);
	$.ajax({
		type: "POST",
		url: "registeration.php",
		data: $('#regForm').serialize(),
		dataType: "json",
		success: function(msg){
			
			if(parseInt(msg.status)==1)
			{
				success(1,msg.txt);
			}
			else if(parseInt(msg.status)==0)
			{
				error(1,msg.txt);
			}
			
			hideshow('loading',0);
		}
	});
}


function hideshow(el,act)
{
	if(act) $('#'+el).css('visibility','visible');
	else $('#'+el).css('visibility','hidden');
}

function error(act,txt)
{
	hideshow('error',act);
	if(txt) $('#error').html(txt);
}
function success(act,txt)
{
	hideshow('success',act);
	if(txt) $('#success').html(txt);
}