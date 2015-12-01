var login=0;
$(document).ready(function(){
	$("#myBtn").click(function () {
		if(login==0)
		{
			$("#myModal").modal();
			$('#lgForm').submit(function(e) {
			lgin();
			e.preventDefault();	
			});
		}
		if(login==1)
		{
			
		}
	});
	
});


function lgin()
{
	hideshow('loading',1);
	error(0);
	$.ajax({
		type: "POST",
		url: "login.php",
		data: $('#lgForm').serialize(),
		dataType: "json",
		success: function(msg){
			if(parseInt(msg.status)==1)
			{
				login=1;
				success(0,msg.txt);
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
	$("#myModal").modal('hide');
	if(txt) $('#myBtn').html('خروج');
	if(txt) $('#lgname').html(txt);
}
