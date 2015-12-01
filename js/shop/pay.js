$(document).ready(function () {
    $("#checkout").click(function () {
        if(login==0)
        {
            $("#myModal").modal();
        }
        else
        {
            window.location = "../DrugStore-master/address.html";
        }
    });
});