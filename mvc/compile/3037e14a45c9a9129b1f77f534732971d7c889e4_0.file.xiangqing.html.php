<?php
/* Smarty version 3.1.30, created on 2017-07-14 11:14:27
  from "F:\wamp\www\travelapp\mvc\template\index\xiangqing.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59688b7342cb17_50845546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3037e14a45c9a9129b1f77f534732971d7c889e4' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\index\\xiangqing.html',
      1 => 1499741422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59688b7342cb17_50845546 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xiangqing.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/xiangqing.css">
</head>
<body>
<div class="xk-head">
    <div class="xk-firstline">
        <div class="exit"></div>
        <div class="xk-fl-zuo"></div>
        <div class="fl-wenzi">产品详情</div>
        <div class="xk-fl-you"></div>
        <div class="share"></div>
    </div>
    <div class="xk-tl">
        <div class="tl-wenzi">PRODUCT DETAILS</div>
    </div>
    <div class="xk-threel">
        <div class="xk-thr1">TRAVEL WITH PASSION</div>
        <div class="xk-thr2">B E S T T R A V E L</div>
        <div class="xk-thr4"><span>———</span> •</div>
        <div class="xk-thr3">旅行•充满激情</div>
    </div>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<div class="xk-title">
    <div class="xk-timg">
        <img src="<?php echo IMG_PATH;?>
/xk-sirenlogo.png" alt="">
    </div>
    <div class="xk-t-wz">
        <div class="black-wz">BESTTRAVEL</div>
        <div class="ddd-wz">私人订制优惠旅行</div>
        <div class="ccc-wz">
            <div class="from"><?php echo $_smarty_tpl->tpl_vars['v']->value["start"];?>
</div>
            <div class="to"><?php echo $_smarty_tpl->tpl_vars['v']->value["end"];?>
</div>
            <div class="caidan">2343534545</div>
        </div>
    </div>
</div>
<div class="xk-message">
    <div class="xk-m-title"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</div>
    <div class="m-message">
        <div class="like"><?php echo $_smarty_tpl->tpl_vars['v']->value["alltime"];?>
</div>
        <div class="sale"><?php echo $_smarty_tpl->tpl_vars['v']->value["discount"];?>
</div>
        <div class="rmb"><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</div>
    </div>
    <div class="m-content">
        <div class="neirong">
            <div class="name">出发地点</div>
            <div class="englishname">MEETING PALACE</div>
            <div class="chufa shuju"><?php echo $_smarty_tpl->tpl_vars['v']->value["start"];?>
</div>
        </div>
        <div class="neirong">
            <div class="name">目的地点</div>
            <div class="englishname">DISIT ACTION</div>
            <div class="daoda shuju"><?php echo $_smarty_tpl->tpl_vars['v']->value["end"];?>
</div>
        </div>
        <div class="neirong">
            <div class="name">出发时间</div>
            <div class="englishname">DEPARTURE TIME</div>
            <div class="chufatime shuju"><?php echo $_smarty_tpl->tpl_vars['v']->value["starttime"];?>
</div>
        </div>
        <div class="neirong">
            <div class="name">交通信息</div>
            <div class="englishname">TRAFFIC MESSAGE</div>
            <div class="traffic shuju"><?php echo $_smarty_tpl->tpl_vars['v']->value["traffic"];?>
</div>
        </div>

    </div>

</div>
<div class="notice">
    <div class="noticeimg"></div>
    <div class="n-con">
        请注意：多程机票需严格按行程顺序使用，如任意一段未使用则后续航段均无法使用。
    </div>
</div>
<div class="xk-details">
    <input type="hidden" class="lid" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
    <div class="buttons">
        <i class="mui-icon mui-icon-compose"></i>
        <div class="button1 button"><span class="hanzi">路线详情</span><span class="eng">ROUTEDETAIL</span></div>
        <div class="button1"><span class="hanzi">用户评价</span><span class="eng">USEREVALUTION</span></div>
    </div>
    <div class="details-content">
        <div class="details-con-title">
            <img src="<?php echo IMG_PATH;?>
/xk-titlebg.png" alt="">
            <div class="chi">路线详情</div>
            <div class="enli">ROUTE INTROCTION</div>
            <div class="concon"><?php echo $_smarty_tpl->tpl_vars['v']->value["routedetail"];?>
</div>
        </div>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<footer>
    <div class="foot-button">
        <img src="<?php echo IMG_PATH;?>
/xk-shoucang.png" alt="" style="left: 0.4rem;">
        收藏</div>
    <div class="foot-button">
        <img src="<?php echo IMG_PATH;?>
/xk-lianxi.png" alt="">
        联系客服</div>
    <div class="foot-button choose">
        <img src="<?php echo IMG_PATH;?>
/xk-dinggou.png" alt="">
        立即预订</div>
</footer>
</body>
</html><?php }
}
