<?php
/* Smarty version 3.1.30, created on 2017-06-30 09:23:01
  from "E:\wamp\www\php\mvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955fc55d7a789_78326476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e8051e5798c6ddf40cbeafc18ad8716b6143b40' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\admin\\main.html',
      1 => 1498807376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5955fc55d7a789_78326476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {
            setInterval(function () {
                var time=new Date();
                var xzse=time.getSeconds()<10?"0"+time.getSeconds():time.getSeconds();
                var xzxs=time.getHours();
                var xzfz=time.getMinutes();
                var nian=time.getFullYear();
                var yue=time.getMonth();
                var ri=time.getDate();
                $(".nian").html(nian+"年");
                $(".yue").html(yue+1+"月");
                $(".ri").html(ri+"日");
                $(".time").html(xzse+"秒");
                $(".xiaoshi").html(xzxs+"时");
                $(".fenzhong").html(xzfz+"分");
            },1000)
            $(".m").click(function () {
                $(".m+ul").slideToggle(200)
            })
            $(".m1").click(function () {
                $(".m1+ul").slideToggle(200)
            })
            $(".m2").click(function () {
                $(".m2+ul").slideToggle(200)
            })
            $(".m3").click(function () {
                $(".m3+ul").slideToggle(200)
            })
        })
    <?php echo '</script'; ?>
>
    <style>
        *{
            list-style: none;
            text-decoration: none;
        }
        html,body{
            height: 100%;width: 100%;
            color: white;
        }
        body{
            /*height: ;*/
            padding: 0;margin: 0;
            overflow: hidden;
            background: url("<?php echo IMG_PATH;?>
/pm0106-4566tj.JPG");
            -webkit-background-size:100% 100%;
            background-size:100% 100%;
        }
        a{
            text-decoration: none;
        }
        header{
            width: 100%;height: 20%;
            border-bottom: 1px dashed rgba(194, 195, 197, 0.53);
            display: flex;
            align-items: center;
            justify-content: space-around;
            font-size: 30px;
        }
        .box{
            width: 100%;height: 80%;

        }
        .box .left{
            float: left;
            width: 20%;height: 100%;
            padding: 40px 50px;
            border-right: 1px dashed rgba(164, 188, 197, 0.53);
            box-sizing: border-box;
        }
        .box .right{
            float: right;
            width: 80%;height: 100%;
        }
        iframe{
            width: 100%;height: 100%;
        }
        .out{
            position: fixed;
            right: 210px;
            top: 22px;
        }
        .shijian{
            width: 240px;
            position: fixed;
            top: 60px;
            right: 55px;
        }
        .zhuye{
            position: fixed;
            top: 22px;
            right: 97px;
        }
        .w{
            float: left;
        }
        .m{
            display: inline-block;
            width: 100px;height: 22px;
            background: #00a0e9;
            color: white;
            border-radius: 5px;
            text-align: center;
        }
        .m1{
            display: inline-block;
            width: 100px;height: 22px;
            background: #00a0e9;
            color: white;
            border-radius: 5px;
            text-align: center;
            margin-top: 5px;
        }
        .m2,.m3{
            display: inline-block;
            width: 100px;height: 22px;
            background: #00a0e9;
            color: white;
            border-radius: 5px;
            text-align: center;
            margin-top: 5px;
        }
        .b li{
            background: white;
            color: #00a0e9;
            width: 100px;height: 22px;
            margin-top: 5px;
            border-radius: 5px;
            text-align: center;
            margin-left: 35px;
        }
    </style>
</head>
<body>
<!--帧窗口   技术-->
<span><a href="index.html?m=admin&f=login&a=logout" class="out">安全退出</a></span>
<div class="shijian">
    <div class="nian w"></div>
    <div class="yue w"></div>
    <div class="ri w"></div>
    <div class="xiaoshi w"></div>
    <div class="fenzhong w"></div>
    <div class="time w"></div>
</div>
<div class="zhuye">
    <a href="##">返回主页</a>
</div>
<header>
    欢迎<?php echo '<?php ';?>echo $_SESSION["uname"]<?php echo '?>';?>来到新闻管理系统
</header>
<div class="box">
    <div class="left">
        <ul>
            <li>
                <a href="javascript:;" class="m a">用户管理</a>
                <ul class="b">
                    <li>
                        <a href="index.php?m=admin&f=user&a=add" target="iframe">添加用户</a>
                    </li>
                    <li>
                        <a href="##" target="iframe">查看用户</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="m1 a">角色管理</a>
                <ul class="b">
                    <li>
                        <a href="index.php?m=admin&f=role&a=add" target="iframe">添加角色</a>
                    </li>
                    <li>
                        <a href="addcon.php" target="iframe">查看角色</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="m2 a">位置管理</a>
                <ul class="b">
                    <li>
                        <a href="addPos.php" target="iframe">添加位置</a>
                    </li>
                    <li>
                        <a href="showpos.php" target="iframe">查看位置</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="m3 a">分类管理</a>
                <ul class="b">
                    <li>
                        <a href="index.php?m=admin&f=category&a=add" target="iframe">添加分类</a>
                    </li>
                    <li>
                        <a href="showpos.php" target="iframe">删除留言</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="m3 a">内容管理</a>
                <ul class="b">
                    <li>
                        <a href="index.php?m=admin&f=category&a=add" target="iframe">添加内容</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=lists&a=add" target="iframe">查看内容</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:;" class="m3 a">推荐位管理</a>
                <ul class="b">
                    <li>
                        <a href="index.php?m=admin&f=position&a=add" target="iframe">添加位置</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=lists&a=add" target="iframe">查看位置</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="iframe">

        </iframe>
    </div>
</div>

</body>
<?php }
}
