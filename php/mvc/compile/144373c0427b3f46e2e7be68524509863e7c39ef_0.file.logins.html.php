<?php
/* Smarty version 3.1.30, created on 2017-07-10 05:42:54
  from "E:\sahd\wamp\www\php\mvc\template\index\logins.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962f7be1d6d41_73788201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '144373c0427b3f46e2e7be68524509863e7c39ef' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\php\\mvc\\template\\index\\logins.html',
      1 => 1499658172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962f7be1d6d41_73788201 (Smarty_Internal_Template $_smarty_tpl) {
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
            src: url('//at.alicdn.com/t/font_2lz0fi78mzdrt3xr.eot');
            src: url('//at.alicdn.com/t/font_2lz0fi78mzdrt3xr.eot?#iefix') format('embedded-opentype'),
            url('//at.alicdn.com/t/font_2lz0fi78mzdrt3xr.woff') format('woff'),
            url('//at.alicdn.com/t/font_2lz0fi78mzdrt3xr.ttf') format('truetype'),
            url('//at.alicdn.com/t/font_2lz0fi78mzdrt3xr.svg#iconfont') format('svg');
        }

        body, html {
            width: 100%;
            height: 100%;
        }

        .bigbox {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            background-image: url("<?php echo IMG_PATH;?>
/dlbeijing.png");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .dsf {
            width: 100%;
            height: 2.5rem;
            position: absolute;
            bottom: 0;
        }

        .dsf p {
            font-size: 0.3rem;
            color: white;
            text-align: center;
            font-family: "宋体";
        }

        .xian {
            display: inline-block;
            width: 20%;
            border-top: 0.01rem solid #e9ecff;
            line-height: 0.24rem;
        }

        .box .dl {
            font-family: iconfont;

        }
        .wx{
              width:3rem;
              height: 0.8rem;
              border: 1px solid #FFFFFF;
              border-radius: 0.4rem;
              display: inline-block;
              background: rgba(0, 25, 255, 0.61);
              padding: 0.1rem;
              text-align: center;
              margin-left: 0.6rem;
              margin-top: 0.6rem;
              float: left;
          }
        .qq{
            width:3rem;
            height: 0.8rem;
            border: 1px solid #FFFFFF;
            border-radius: 0.4rem;
            display: inline-block;
            background: rgba(0, 25, 255, 0.61);
            padding: 0.1rem;
            text-align: center;
            margin-right: 0.6rem;
            margin-top: 0.6rem;
            float: right;
        }
        .wxleft{
            font-family: iconfont;
         color: whitesmoke;
            display: inline-block;
            height: 100%;
            float: left;
            font-size: 0.6rem;
            margin-left: 0.6rem;
        }
        .wxrifht{
            float: left;
            font-size: 0.2rem;
            color: white;
        }
        .dl{
            width: 100%;
            height: 4rem;

            position: absolute;
            bottom: 3.5rem;
        }
        .dltop{
            width:100%;
            height:1rem;

            padding: 0.1rem;

        }
        .dlname,.dlpass{
            font-family: iconfont;
            width: 0.8rem;
            height: 0.8rem;
            border-radius: 0.4rem;
            border: 0.01rem solid #FFFFFF;
            color: whitesmoke;
            font-size: 0.6rem;

            line-height: 0.7rem;

            background: #2E384A;
        }
        .dlname{
            text-align: center;
            float: left;
            margin-left: 30%;
        }
        .dlpass{
            float: right;
            line-height: 0.75rem;
            margin-right: 30%;
        }
        .dlzhong{
            width:80%;
            height:1.6rem;
            margin: 0 auto;
            margin-top: 0.3rem;
            background: whitesmoke;
            border-radius: 5px;
            border-bottom: 0.1rem solid;
            border-image: linear-gradient(to right, #2b54ff, #41fff7) 90 30;
            overflow: hidden;
            padding: 0.15rem;
        }
        .zTop{
            color: #406ae9;
            font-size: 0.12rem;
        }
        .zBottom{
            width:100%;
            height: 0.8rem;
            border: 0.01rem solid #DADADA;
            background: #F7F7F7;
            border-radius: 0.4rem;
            overflow: hidden;
            margin-top: 0.1rem;
            padding: 0.2rem;
        }
        .zBottom input{
            width:100%;
            height:100%;
            background:none;
            outline:none;
            border: 0;
            float: left;
        }
        .zhmm{
            width:90%;
            font-size: 0.35rem;
            color: rgba(245, 245, 245, 0.88);
            text-align: right;
            margin-top: 0.2rem;

        }
        .dlCon{
            width:3rem;
            height: 0.8rem;
            border: 1px solid #FFFFFF;
            border-radius: 0.4rem;
            display: inline-block;
            background: #C1BFBF;
            padding: 0.1rem;
            text-align: center;
            position:absolute;
            left:0;
            right:0;
            margin: auto;
            font-size: 0.2rem;
            color: #8D8C8C;
        }
    </style>
</head>
<body>

<div class="bigbox">
    <div class="dl">
        <div class="dltop">
            <div class="dlname">&#xe616;</div>
            <div class="dlpass">&#xe7bd;</div>
        </div>
        <div class="dlzhong">
            <div class="zTop">·· Username</div>
            <div class="zBottom">
                <input type="text" placeholder="您可以输入手机号或者邮箱号">
            </div>
        </div>
        <div class="zhmm">··找回密码</div>
        <div class="dlCon">
            <p>登陆</p>
            <p>DENGLU</p>
        </div>
    </div>
    <div class="dsf">
        <p>
            <span class="xian"></span>
            使用第三方登陆
            <span class="xian"></span>
        </p>
        <div class="wx">
            <div class="wxleft">&#xe63d;</div>
            <div class="wxrifht">
                <div class="wxtop">微信</div>
                <div class="wxbottom">WECHAT</div>
            </div>
        </div>
        <div class="qq">
            <div class="wxleft">&#xe635;</div>
            <div class="wxrifht">
                <div class="wxtop">QQ</div>
                <div class="wxbottom">DENQLO</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
