var InsideCart = 0;
var shoppingList = [];
$(document).ready(function () {
    $("#plus1").click(function () {
        InsideCart += 1;
        $("#InCart").html(InsideCart);
        alert('کالا به سبد افزوده شد. برای مشاهده لیست کالاهای انتخاب شده روی آیکن سبد خرید کلیک کنید.');
        
        shoppingList.push({
            price : $("#price1").html() ,
            productName : $("#productName1").html()
        });
        
    });
});