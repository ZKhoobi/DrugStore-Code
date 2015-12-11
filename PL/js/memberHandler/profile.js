$(document).ready(function () {
    $("#edit").click(function () {
        $("rname").val('');
        $("rfname").val('');
        $("runame").val('');
        $("rpass").val('');
        $("rrpass").val('');
        $("remail").val('');
        $("rnumber").val('');
        alert("تغییرات ثبت شد.");
		alert("just prototype dataBase does not change!");
        window.location = "profile.php";
        
    });
});