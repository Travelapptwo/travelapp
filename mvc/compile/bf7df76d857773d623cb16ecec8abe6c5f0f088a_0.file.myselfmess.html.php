<?php
/* Smarty version 3.1.30, created on 2017-07-18 04:49:30
  from "F:\wamp\www\travelapp\mvc\template\index\myselfmess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596d773a596193_46161436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf7df76d857773d623cb16ecec8abe6c5f0f088a' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\index\\myselfmess.html',
      1 => 1499827773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596d773a596193_46161436 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'F:\\wamp\\www\\travelapp\\mvc\\libs\\smarty\\plugins\\modifier.truncate.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/gl-head.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/lm-gr.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="gl_head">

        <div class="gl_title"><span>个人资料</span></div>
        <div class="gl_leftI"><a href="index.php?m=index&f=myself"><img src="<?php echo IMG_PATH;?>
/gl1.png" alt=""></a></div>
        <div class="gl_rightI"></div>
    </div>
    <div class="lm_banner">
        <div class="yuan">
            <div></div>
            <div></div>
            <div style="background-image: url('<?php if ($_smarty_tpl->tpl_vars['result']->value[0]['upicture']) {?> <?php echo $_smarty_tpl->tpl_vars['result']->value[0]['upicture'];?>
 <?php } else { ?> <?php echo IMG_PATH;?>
/wyb_02.png <?php }?>    ')"></div>
        </div>
        <!--<img src="image/lm_03.png" alt="">-->
        <h3><a href="index.php?m=index&f=myself&a=messchange&type=upicture">更改头像</a></h3>
    </div>
    <div class="lm_list" id="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uid'];?>
">
        <ul>
            <li><span class="sleft">昵称</span><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=unickname"><img src="<?php echo IMG_PATH;?>
/lm_07.png" alt=""></a><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=unickname"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['unickname'];?>
</a></li>
            <li><span class="sleft">个性签名</span><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=umess"><img src="<?php echo IMG_PATH;?>
/lm_07.png" alt=""></a><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=umess"><?php if (smarty_modifier_truncate($_smarty_tpl->tpl_vars['result']->value[0]['umess'],15,"...",true)) {?> <?php echo $_smarty_tpl->tpl_vars['result']->value[0]['umess'];?>
 <?php } else { ?>  这个人很懒，什么也没留下<?php }?></a></li>
            <li><span class="sleft">性别</span><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=usex"><img src="<?php echo IMG_PATH;?>
/lm_07.png" alt=""></a><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=usex"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['usex'];?>
</a></li>
            <li><span class="sleft">生日</span><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=ubirthday"><img src="<?php echo IMG_PATH;?>
/lm_07.png" alt=""></a><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=ubirthday"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['ubirthday'];?>
</a></li>
            <li><span class="sleft">家乡</span><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=uhome"></a><img src="<?php echo IMG_PATH;?>
/lm_07.png" alt=""><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=uhome"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uhome'];?>
</a></li>
            <li><span class="sleft">学校</span><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=uschool"><img src="<?php echo IMG_PATH;?>
/lm_07.png" alt=""></a><a class="sright" href="index.php?m=index&f=myself&a=messchange&type=uschool"><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uschool'];?>
</a></li>
        </ul>
    </div>

</body>
</html><?php }
}
