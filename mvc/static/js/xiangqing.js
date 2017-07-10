$(function () {
    var flag=false;
    $(".button1").click(function () {
        $(this).addClass("button").siblings().removeClass("button");
        if(flag==true){
            $(".chi").html("路线详情");
            $(".enli").html("ROUTE INTROCTION");
            flag=false;
        }else{
            $(".chi").html("用户评价");
            $(".enli").html("USER EVALUTION");
            flag=true;
        }
    });
});