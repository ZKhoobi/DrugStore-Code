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
        window.location = "profile.html";
        
    });
});