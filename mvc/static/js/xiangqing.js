$(function () {
            document.querySelector(".exit").onclick=function () {
                history.back();
            }
    var flag=false;
    var lid=$(".lid").val();
    var oldcon=$(".concon").html();
    $(".buttons>i").click(function () {
        location.href='index.php?m=index&f=message&lid='+lid;
    });
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
                    if(e[0]){
                        var str="<ul class='mui-table-view' style='font-size: 0.2rem'>";
                        for(var i=0;i<e.length;i++) {
                            str+="<li class='mui-table-view-cell mui-media'><div class='mui-media-body'>" + e[i].message + "<p class='mui-ellipsis'>" + e[i].uname + "</p><p class='mui-ellipsis' style='text-align: right;font-size: 0.16rem'>" + e[i].mtime + "</p></div></li>";
                        }
                        str+="</ul>";
                        $(".concon").html(str);
                    }else{
                        $(".concon").html("暂无评价")
                    }
                }
            })
            flag=true;
        }
    });
});