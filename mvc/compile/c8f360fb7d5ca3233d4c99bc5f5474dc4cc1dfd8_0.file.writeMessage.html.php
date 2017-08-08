<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:13:43
  from "E:\sahd\wamp\www\5.26\mvc\template\index\writeMessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977fad7a439e8_83572223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8f360fb7d5ca3233d4c99bc5f5474dc4cc1dfd8' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\5.26\\mvc\\template\\index\\writeMessage.html',
      1 => 1499769920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977fad7a439e8_83572223 (Smarty_Internal_Template $_smarty_tpl) {
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
/jquery.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<?php echo '<script'; ?>
>
    window.onload=function(){
        document.querySelector(".back").onclick=function () {
            history.back();
        }
    }
<?php echo '</script'; ?>
>
</head>
<?php if ($_smarty_tpl->tpl_vars['userlogin']->value) {?>
<body>

<header class="mui-bar mui-bar-nav">
    <a class="mui-icon mui-icon-left-nav mui-pull-left back"></a>
    <h1 class="mui-title">
        留言
    </h1>
</header>

<!--
  谁的留言       session
  给哪篇文章写的    get
  时间
  内容
-->
<div class="mui-content">

    <textarea name="" id="" cols="30" rows="10"></textarea>

    <button id='login' class="mui-btn mui-btn-block mui-btn-primary" type="submit" style="position: fixed;bottom: 0" mid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" lid="<?php echo $_smarty_tpl->tpl_vars['lid']->value;?>
">发布</button>
</div>
<?php echo '<script'; ?>
>

    $("button").click(function(){

        var uid=$(this).attr("mid");
        var lid=$(this).attr("lid");
        var con=$("textarea").val();
       // console.log(uid,lid,con)
        if(con==""){
            alert("请输入内容");
        }else{
            $.ajax({
                url:"index.php?m=index&f=message&a=add",
                type:"post",
                data:{
                    uid:uid,lid:lid,con:con
                },
                success:function(e){
                    //console.log(e);
                    if(e=="ok"){
                        $("textarea").val("");
                        alert("留言成功");
                    }
                }
            })
        }

    })
<?php echo '</script'; ?>
>
</body>
<?php } else { ?>
        <?php echo '<script'; ?>
>
            alert("您还未登录,请先登录！");location.href="index.php?f=index&a=logins"
        <?php echo '</script'; ?>
>
<?php }?>
</html><?php }
}
