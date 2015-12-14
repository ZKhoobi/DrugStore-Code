$(document).ready(function () {
    $(".cart").click(function () {
        window.location = "../DrugStore-master/cartlist.html";
        var table = document.getElementById("cartTable");
        var row = table.insertRow(0);
        var cell0 = row.inserCell(0);
        var cell1 = row.inserCell(1);
        var cell2 = row.inserCell(2);
        var cell3 = row.inserCell(3);
        cell0 = shopingList[InsideCart-1].price
        cell1 = shopingList[InsideCart-1].productName;
        alert('hi');
    });
});
$(document).ready(function () {
    $("#del1").click(function () {
        $("#row1").html('');
        $("#sum").html('8000');
        $("#sum1").html('10000');
    });
});
//$(document).ready(function () {
//    $("#del2").click(function () {
//        $("#row2").html('');
//        $("#sum").html('6000');
//        $("#sum1").html('8000');
//    });
//});