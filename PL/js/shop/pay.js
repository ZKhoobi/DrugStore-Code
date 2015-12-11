$(document).ready(function () {
    $("#checkout").click(function () {
        if(login==0)
        {
            $("#myModal").modal();
			$('#lgForm').submit(function(e) {
			lgin();
			e.preventDefault();	
			});
        }
        else
        {
            window.location = "address.php";
        }
    });
	$("#bankPort").click(function(){
		alert("اتصال به درگاه بانک برای پرداخت مبلغ فاکتور!");
	});
});