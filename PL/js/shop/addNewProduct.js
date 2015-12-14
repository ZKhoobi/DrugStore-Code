$(document).ready(function () {
	$("#sabt").click(function(){
		$("#uploadForm").submit(function(e){
			upload();
			e.preventDefault();
		});
	});
});
function upload()
{
	$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  $('#uploadForm').serialize(),//new FormData(this),//
			dataType: "json",
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(msg)
		    {
				if(parseInt(msg.status)==0)
				{
					error(1,msg.txt);
				}
				if(parseInt(msg.status)==1)
				{
					succ(1,msg.txt);
				}
		    }	        
	   });
		// $.ajax({
        	// url: "upload.php",
			// type: "POST",
			// data:  new FormData(this),
			// contentType: false,
    	    // cache: false,
			// processData:false,
			// success: function(data)
		    // {
			// $("#targetLayer").html(data);
		    // },
		  	// error: function() 
	    	// {
	    	// } 	        
	   // });
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
function succ(act,txt)
{
	hideshow('successful',act);
	if(txt) $('#successful').html(txt);
}