$(function () {
    var loginuname = $(".zBottom input[name='uname']");
    loginuname.focus(function () {
        $(".dlzhong .tishi ").css("display", "none");
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
                console.log(data)
                $(".dlzhong .tishi").html(data);
                if (data == "unameok") {
                    $(".dlzhong .tishi").css("display", "none");
                    $("#Username").css("display", "none");
                    $("#Userpassword").css("display", "block");
                } else {
                    $(".dlzhong .tishi").html("此用户名不存在");
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
            data: {upass: upass,uname: $(".zBottom input[name='uname']").val()},
            success: function (data) {
                console.log(data);
                $(".dlzhong .tishi").html(data);
                $(".dlzhong .tishi").css("display", "block");
                if (data == "ok") {
                    $(".dlzhong .tishi").css("display", "none");
                    location.href = "index.php";
                } else {
                    $(".dlzhong .mimatishi").html("密码输入错误!");
                    $(".dlzhong .mimatishi").css("display", "block");
                }
            }
        })
    });
});



