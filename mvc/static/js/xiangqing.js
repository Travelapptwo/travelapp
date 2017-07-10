$(function () {
    var flag=false;
    var lid=$(".lid").val();
    var oldcon=$(".concon").html();

    $(".button1").click(function () {
        $(this).addClass("button").siblings().removeClass("button");
        if(flag==true){
            $(".chi").html("路线详情");
            $(".enli").html("ROUTE INTROCTION");
            $(".concon").html(oldcon);
            flag=false;
        }else{
            $(".chi").html("用户评价");
            $(".enli").html("USER EVALUTION");
            $.ajax({
                url:"index.php?m=index&f=xiangqing&a=findmessage",
                data:{lid:lid},
                dataType:"json",
                success:function (e) {
                    $(".concon").html("<ul class='mui-table-view' style='font-size: 0.2rem'><li class='mui-table-view-cell mui-media'><div class='mui-media-body'>"+e[0].message+"<p class='mui-ellipsis'>"+e[0].uname+"</p><p class='mui-ellipsis' style='text-align: right;font-size: 0.16rem'>"+e[0].mtime+"</p></div></li></ul>");
                }
            })
            flag=true;
        }

    });
});