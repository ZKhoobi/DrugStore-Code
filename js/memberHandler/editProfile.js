$(document).ready(function () {
    $("#edit").click(function () {
        if ($("#ppass").val() != "123" ) {
            alert("رمز عبور نامعتبر است!");
        }
        else
        {
            alert("تغییرات ثبت شد.");
        }
        //else
        //{
        //    $("rname").val('');
        //    $("rfname").val('');
        //    $("runame").val('');
        //    $("rpass").val('');
        //    $("rrpass").val('');
        //    $("remail").val('');
        //    $("rnumber").val('');
            
        //    alert("ثبت نام انجام شد.");
        //    location.reload();
        //}
    });
});