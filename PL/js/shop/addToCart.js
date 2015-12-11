$(document).ready(function () {
	
	$("#cartIcon").click(function(){
		location.replace("../cartList.php");
	});
	// $('.plus').click(function(){
		// addItem();
		// e.preventDefault();
	// });
	// $('#buy').submit(function(e){
		// addItem();
		// e.preventDefault();
	// });
});
function addItem()
{
	$.ajax({
		type: "POST",
		url: "cart.php",
		data: $('.plus').serialize(),
		dataType: "json",
		success: function(msg){
			$("#InCart").html(msg.status);
		}
	});
}
