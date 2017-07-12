$(function () {
    var login = $(".zBottom input[name='uname']");
    login.focus(function () {
        $(".dlzhong .tishi ").css("display", "none");
    });
    var uname = "";
    login.blur(function () {
        var uname = $(this).val();
        if (uname == "") {
            $(".dlzhong .tishi ").css("display", "block");
        } else {

        }

    });
    $(".dlCon").click(function () {
        $.ajax({
            url: "index.php?m=index&f=login&a=loginUname",
            type: "post",
            data: {uname: $(".zBottom input[name='uname']").val()},
            success: function (data) {
                if (data == "ok") {
                    $("#Username").css("display", "none");
                    $("#Userpassword").css("display", "block");
                } else {
                    $(".dlzhong .tishi").html("用户名输入错误!");
                    $(".dlzhong .tishi").css("display", "block");
                }
            }
        })
    });
    $(".dlbtn").click(function () {
        var upass = $(".zBottom input[name='upass']").val();
        $.ajax({
            url: "index.php?m=index&f=login&a=loginUpass",
            type: "post",
            data: {upass: upass},
            success: function (data) {
               /* console.log(data);
                if (data == "ok") {

                    // location.href="index.php";
                }*/
                if(data=="ok"){
                    //alert(1)
                    $("#Username").css("display","none");
                    $("#Userpassword").css("display","block");
                    location.href="index.php";
                }else{
                   // alert(2)
                    $(".dlzhong .tishi").html("用户名输入错误!");
                    $(".dlzhong .tishi").css("display","block");
                }
            }
        })
    })
});

