
var login = 0;
$(document).ready(function () {
    //for buying things you should first login
    $("#lgout").hide();
    $("#myBtn").show();
    $(".profile").show();
    $(".aliprofile").hide();
    $("#myBtn").click(function () {
        $("#myModal").modal();
    });

    $("#lgin").click(function (evt) {
        if ("alahmad" == $("#usrname").val() || "admin" == $("#psw").val()) {
            window.open( "../DrugStore-master/management_panel/manage_employer.html");
            window.close(this);
            login = 2;
        }
        else if ("ali" != $("#usrname").val() || "123" != $("#psw").val())
        {
            alert("نام کاربری یا رمز عبور اشتباه وارد شده است. لطفا دوباره وارد کنید.");
        }
        else
        {

            $("#myModal").modal('hide');
            evt.preventDefault();
            $(".profile").hide();
            $(".aliprofile").show();
            $("#lgout").show();
            $("#myBtn").hide();
            login = 1;
        }

    });


    $("#lgout").click(function () {
        $("#lgout").hide();
        $("#myBtn").show();
        $(".profile").show();
        $(".aliprofile").hide();
        $("#usrname").val('');
        $("#psw").val('');
        login = 0;
    });

    $("#btn_search").click(function () {
        if ($("#in_search").val() != "")
        {
            window.open("https://www.google.com/#q=drugstore+%2B+"+$("#in_search").val());
            window.close(this);
        }
    });
});
