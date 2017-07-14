$(function () {
    $(".xyb").click(function () {
        var str = $(".form").serialize();
        var uname = $("input[name='uname']").val();
        var uphonenum = $("input[name='uphonenum']").val();
        var upass = $("input[name='upass']").val();
        var upass2 = $("input[name='upass2']").val();

        if (uname == "" || uphonenum == "" || upass == "" || upass2 == "") {
            $(".unametishi").css("display", "block");
        }
        if (upass != upass2) {
            $(".unametishi").css("display", "block");
        }
        // console.log(str);
        // return;
        $.ajax({
            url: "index.php?m=index&f=login&a=register",
            type: "post",
            data: str,
            success: function (e) {
                $(".unametishi p").html(e);
                if (e == "注册成功") {
                    alert("注册成功");
                    $(".unametishi").css("display", "block");
                    location.href = "index.php?m=index&f=index&a=logins";
                } else if (e == "用户已存在") {
                    $(".unametishi").css("display", "block");
                }
                else {
                    $(".unametishi").css("display", "block");
                }
            }
        })
    });
    $("input[name='uname']").blur(function () {
        var uname = $("input[name='uname']").val();
        $.ajax({
            url: "index.php?m=index&f=login&a=register",
            type: "post",
            data: {uname: uname},
            success: function (e) {
                $(".unametishi p").html(e);
                if (e == "用户名已存在") {
                    $(".unametishi").css("display", "block");
                }
            }
        })
    });
    $("input[name='uphonenum']").blur(function () {
        var uphonenum = $("input[name='uphonenum']").val();
        if (!(/^1[34578]\d{9}$/.test(uphonenum))) {
            $(".unametishi").css("display", "block");
            $(".unametishi p").html("请输入正确的手机号");
            return false;
        }
    });
    $("input").focus(function () {
        $(".unametishi").css("display", "none");
    })
});

