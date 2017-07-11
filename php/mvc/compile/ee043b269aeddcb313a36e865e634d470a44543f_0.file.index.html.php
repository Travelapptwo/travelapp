<?php
/* Smarty version 3.1.30, created on 2017-07-10 10:09:34
  from "E:\sahd\wamp\www\php\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5963363ef307d2_67211085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee043b269aeddcb313a36e865e634d470a44543f' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\php\\mvc\\template\\index\\index.html',
      1 => 1499674172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5963363ef307d2_67211085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>

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
        body, html {
            width: 100%;
            height: 100%;
        }

        .bigbox {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
        }

        .shangping {
            width: 100%;
            height: 100%;
            position: absolute;
        }

        .shangping li {
            width: 100%;
            height: 100%;

            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            position: absolute;
            transition: all 1s;
        }

        .shangping li:nth-child(1) {
            background-image: url("<?php echo IMG_PATH;?>
/shangping.jpg");
            z-index: 2;

        }

        .shangping li:nth-child(2) {
            background-image: url("<?php echo IMG_PATH;?>
/shanpin2.jpg");
        }

        .shangping li:nth-child(3) {
            background-image: url("<?php echo IMG_PATH;?>
/shanpin3.jpg");
        }

        .shangping li img {
            width: 70%;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 4rem;
            margin: auto;

            animation: shanping 1s;
        }

        @keyframes shanping {
            0% {
                width: 70%;
            }
            20% {
                width: 90%;
            }
            50% {
                width: 50%;
            }
            60% {
                width: 80%;
            }
            80% {
                width: 60%;
            }
            90% {
                width: 75%;
            }
            100% {
                width: 70%;
            }

        }

        .lbd {
            width: 30%;
            z-index: 100;
            text-align: center;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            bottom: 1rem;
        }

        .lbd li {
            display: inline-block;
            width: 0.36rem;
            height: 0.36rem;
            background: white;
            border-radius: 0.18rem;

        }

        .lbd li:nth-child(1) {
            width: 0.6rem;
        }

        .ksty {
            width: 3.6rem;
            height: 0.95rem;
            border-radius: 0.475rem;
            background: #7226F1;
            position: absolute;
            right: 0;
            left: 0;
            margin: auto;
            bottom: 1rem;
            z-index: 100;
            font-size: 0.36rem;
            text-align: center;
            line-height: 0.95rem;
            color: #212121;
            display: none;

        }
        .tiaoguo{
            font-size: 20px;
            position: absolute;
            right:0.3rem;
            top: 0.5rem;
            z-index:100;
            font-family: "宋体";
            background: white;
            border-radius: 24px;
            padding: 5px;
            padding-right: 15px;
            padding-left:15px;
            color: #212121;
        }
    </style>
</head>
<body>
<div class="bigbox">
    <ul class="shangping">
        <li>
            <img src="<?php echo IMG_PATH;?>
/shangping1.png" alt="" attr="0">
        </li>
        <li>
            <img src="<?php echo IMG_PATH;?>
/shanpin2.png" alt="" attr="1">
        </li>
        <li>
            <img src="<?php echo IMG_PATH;?>
/shanpin3.png" alt="" attr="2">
        </li>
    </ul>
    <ul class="lbd">
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="ksty">
        开始体验
    </div>
    <div class="tiaoguo">
        跳过
    </div>
</div>
</body>
<?php echo '<script'; ?>
>
    var num = 0;
    $(".tiaoguo").click(function(){
       shan(2);
    });
    $(".bigbox").click(function(){

    })


    function shan(i) {
        $(".shangping li img").css("animation","0s");
        setTimeout(function(){
            $(".shangping li img").css("animation","shanping 1s");
        },10);
        if (i > 1) {
            clearInterval(t);
            $(".ksty").css("display", "block");
            $(".lbd").css("display", "none");
            $(".tiaoguo").css("display", "none");
        } else {
            $(".ksty").css("display", "none");
            $(".lbd").css("display", "block");
            $(".tiaoguo").css("display", "block");
        }
        $(".shangping li").css("z-index",1).eq(i).css("z-index",2);
        $(".lbd li").css("width","0.36rem").eq(i).css("width","0.6rem");
    }

    $(".lbd li").each(function (i,e) {
        e.onmouseover = function () {
            clearInterval(t);
            num=i;
            shan(i);
            setTimeout(function(){
               t=setInterval(move, 2000);
            },1000);
        }
    });
    var t=setInterval(move, 2000);
    function move() {
        num++;
        shan(num);
    }
    $(".ksty").click(function(){
        location.href="index.php?f=index&a=login";
    });
<?php echo '</script'; ?>
>
</html>
<?php }
}
