$(document).ready(function () {
    $("#registeration").click(function () {
        if ($("#rname").val() == "" || $("#rfname").val() == "" || $("#runame").val() == "" || $("#rpass").val() == "" || $("#rrpass").val() == "" || $("#remail").val() == "" || $("#rnumber").val() == "") {
            alert("لطفا ابتدا فرم را تکمیل کرده سپس دکمه ثبت نام را فشار دهید.");
        }
        else if ($("#rpass").val() != $("#rrpass").val()) {
            alert("لطفا رمز عبور را دوباره وارد کنید.");
        }
        else {
            $("rname").val('');
            $("rfname").val('');
            $("runame").val('');
            $("rpass").val('');
            $("rrpass").val('');
            $("remail").val('');
            $("rnumber").val('');
            alert("ثبت نام انجام شد.");
            window.location = "register.html";
            

        }
    });
});