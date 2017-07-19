$(function () {
    var loginuname = $(".zBottom input[name='uname']");
    loginuname.focus(function () {
        $(".dlzhong .tishi ").css("display", "none");
        $(".zBottom .line").css("display", "none");
        $(".zBottom input").css("color","#505151");

    });
    var uname = "";
    loginuname.blur(function () {
        var uname = $(this).val();
        if (uname == "") {
            $(".dlzhong .tishi ").css("display", "block");
        }
    });
    var loginupass = $(".zBottom input[name='upass']");
    loginupass.focus(function () {
        $(".dlzhong .tishi ").css("display", "none");
        $(".zBottom .line").css("display", "none");
        $(".zBottom input").css("color","#505151");
    });
    var upass = "";
    loginupass.blur(function () {
        var upass = $(this).val();
        if (upass == "") {
            $(".dlzhong .tishi ").css("display", "block");
        }
        var login = $(".zBottom input[name='uname']");
        login.focus(function () {
            $(".dlzhong .tishi ").css("display", "none");
        });
    });

    $(".dlCon").click(function () {
        $.ajax({
            url: "index.php?m=index&f=login&a=loginUname",
            type: "post",
            data: {uname: $(".zBottom input[name='uname']").val()},
            success: function (data) {
                // console.log(data)
                $(".dlzhong .tishi p").html(data);
                $(".dlzhong .tishi").css("display", "block");
                if (data == "unameok") {
                    $(".dlzhong .tishi").css("display", "none");
                    $("#Username").css("display", "none");
                    $("#Userpassword").css("display", "block");
                } else {
                    $(".zBottom input").css("color","#c52a3d");
                    $(".dlzhong .tishi p").html("此用户名不存在");
                    $(".dlzhong .tishi").css("display", "block");
                    $(".zBottom .line").css("display", "block");
                }
            }
        })
    });
    $(".dlbtn").click(function () {
        var upass = $(".zBottom input[name='upass']").val();
        $.ajax({
            url: "index.php?m=index&f=login&a=loginUpass",
            type: "post",
            data: {upass: upass,uname: $(".zBottom input[name='uname']").val()},
            success: function (data) {
                $(".dlzhong .tishi p").html(data);
                $(".dlzhong .tishi").css("display", "block");
                $(".zBottom .line").css("display", "none");
                if (data == "ok") {
                    // $(".dlzhong .tishi").css("display", "none");
                    $(".dlzhong .tishi").html("登陆成功，即将跳转到首页...");
                    $(".dlpass").css("background", "#40e94c");
                    $(".dlbtn").css("background", "#4063e9");
                    $(".zBottom img").css("display", "block");
                    setTimeout(function () {
                        location.href = "index.php";
                    },3000);
                } else {
                    $(".zBottom input").css("color","#c52a3d");
                    $(".dlzhong .mimatishi p").html("密码输入错误!");
                    $(".dlzhong .mimatishi").css("display", "block");
                    $(".zBottom .line").css("display", "block");
                }
            }
        })
    });
});



