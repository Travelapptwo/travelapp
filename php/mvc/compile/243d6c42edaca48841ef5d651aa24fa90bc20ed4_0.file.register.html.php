<?php
/* Smarty version 3.1.30, created on 2017-07-10 10:42:00
  from "E:\sahd\wamp\www\php\mvc\template\index\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59633dd8c7a768_71352820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '243d6c42edaca48841ef5d651aa24fa90bc20ed4' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\php\\mvc\\template\\index\\register.html',
      1 => 1499673444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59633dd8c7a768_71352820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <style>
        @font-face {
            font-family: 'iconfont';  /* project id 348612 */
            src: url('http://at.alicdn.com/t/font_mz6yuix6boz85mi.css');
            src: url('//at.alicdn.com/t/font_mz6yuix6boz85mi.eot?#iefix') format('embedded-opentype'),
            url('//at.alicdn.com/t/font_mz6yuix6boz85mi.woff') format('woff'),
            url('//at.alicdn.com/t/font_mz6yuix6boz85mi.ttf') format('truetype'),
            url('//at.alicdn.com/t/font_mz6yuix6boz85mi.svg#iconfont') format('svg');
        }
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            text-decoration: none; /* 清除a标签下划线 */
            list-style-type:none;
        }
        a{
            color: #808080;


        }
        a:hover{
            color: #afdd22;
        }
        a{
            text-decoration:none;
        }
        body,html{
            width:100%;
            height:100%;
            background-image: url("<?php echo IMG_PATH;?>
/zj-bj.png");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .nr{
            padding: 0.5rem;
            padding-bottom: 0.9rem;
            width:6rem;
            height:7.4rem;
            position: absolute;
            left:0;
            right:0;
            margin: auto;
            bottom: 2rem;
            border-radius: 5px;
            background-color: white;
            background-image: url("<?php echo IMG_PATH;?>
/zj-xbj.png");

            background-size: cover;
            background-repeat: no-repeat

        }
        .form{
            margin-top: 2rem;
            /*background: black;*/
        }
        .top{
            font-size: 0.22rem;
            line-height:0.5rem;
            font-family: "sanfrancisco";
            color: #406ae9;
        }
        .bottom{
            width:100%;
            height:0.6rem;
            background: #F7F7F7;
            border-radius: 0.6rem;
            overflow: hidden;
            border: 1px solid #DDDDDD;

        }
        .left{
            width: 0.4rem;
            height: 0.4rem;
            margin: 0.1rem;
            border-radius: 0.4rem;
            float: left;
            background: blue;
        }
        .right{
            width:4rem;
            height: 100%;
            float: left;

            padding: 0.1rem;
        }
        input{
            width:100%;
            height: 100%;
            background:none;
            outline:none;
            border: 0;
            float: left;
        }
        .xyb{
            width:2.5rem;
            height: 0.7rem;
            background: #A3A4A6;
            position: absolute;
            left:0;
            right:0;
            margin: auto;
            bottom: 0.5rem;
            border-radius: 0.5rem;
            text-align: center;
            color: #807e7e;
        }
        span{
            display: block;

            font-size: 12px;
        }
        .xuanzhong{
            color: #FCFAFA;
            background: #2A4BD8;
        }
    </style>
</head>
<body>
<div class="nr">
    <div class="form">
        <div class="top">..Username</div>
        <div class="bottom">
            <div class="left">

            </div>
            <div class="right">
                <input type="text" placeholder="用户名" name="name">
            </div>
        </div>
        <div class="top">..Password</div>
        <div class="bottom">
            <div class="left">

            </div>
            <div class="right">
                <input type="password" placeholder="密码" name="password1">
            </div>
        </div>
        <div class="bottom">
            <div class="left">

            </div>
            <div class="right">
                <input type="password" placeholder="再次输入密码" name="password2">
            </div>
        </div>

    </div>
    <div class="xyb">
        <span>注册</span>
        <span>XIAYIBU</span>
    </div>

</div>
<div class="iconfont">&#xe657;</div>
</body>
<?php echo '<script'; ?>
>
    $("input[name=name]").blur(function(){
        if(!$(this).val()==""){
            $(".xyb").addClass("xuanzhong");

        }else {
            $(".xyb").removeClass("xuanzhong");
        }

    });
    $(".xyb").click(function(){

        if($(".xyb").hasClass("xuanzhong")){
            var name=$("input[name=name]").val();
            var password=$("input[name=password]").val();
            if(name==""){
                alert("用户名不能为空")
            }else if(password==""){
                alert("密码不能为空")
            }else {

                $.ajax({
                    type: 'POST',
                    url:"index.php?f=index&a=loginss",
                    data:{
                        name:name,password:password
                    },
                    success:function(e){
                        alert(e);
                    }
                });
            }

        }
    })

<?php echo '</script'; ?>
>
</html><?php }
}
