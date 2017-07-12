<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:26:45
  from "F:\wamp\www\travelapp\mvc\template\index\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964a7e5d9fe83_66649723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a67af4ed20d183d475824ab8c384798393fd724' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\index\\list.html',
      1 => 1499756066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964a7e5d9fe83_66649723 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/lists.css"/>
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_tgrlk8guf7833di.css"/>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            $(".back").click(function () {
                history.back();
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
<header>
    <div class="mb">
        <div class="back">
            <i class="iconfont icon-jiantou"></i>
        </div>
        <div class="title">
            EVERDAY NEWS HERE
        </div>
        <div class="fgxian">
        </div>
        <div class="zixun">
            <div class="zxsx">资讯为您筛选中</div>
            <div class="yuan yuan1"></div>
            <div class="yuan yuan2"></div>
            <div class="yuan yuan3"></div>
        </div>
    </div>
    <div class="sousuo">
        <div class="zi">WANT TO GO...</div>
        <div class="ssyuan"></div>
        <div class="ssyuan"></div>
        <input type="text" class="kuang" name="" id="" value=""/>
        <div class="y y01">
            <div class="y1"></div>
            <div class="y2"></div>
            <div class="y3"></div>
        </div>
        <i class="iconfont icon-voice_icon"></i>
        <div class="y y02">
            <div class="y3" style="margin-right: 0.1rem;"></div>
            <div class="y2"></div>
            <div class="y1" style="margin-right: 0.01rem;"></div>
        </div>
    </div>
</header>
<main>
    <div class="tuijian-con">
        <ul class="tuijiannr">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li class="remen">
                <a href="index.php?m=index&f=xiangqing&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <div class="left-tu">
                    <img src="<?php echo IMG_PATH;?>
/c-tuijiantu.jpg" alt="">
                </div>
                <div class="right-box">
                    <div class="right-title"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</div>
                    <div class="right-title1">时长：<?php echo $_smarty_tpl->tpl_vars['v']->value["alltime"];?>
</div>
                    <div class="right-title2">评分：
                        <ul class="xing">
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['v']->value["xingji"]+1 - (1) : 1-($_smarty_tpl->tpl_vars['v']->value["xingji"])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            <li></li>
                            <?php }
}
?>

                        </ul>
                    </div>

                    <div class="first">
                        <div class="shouzi">折
                            <!--<span>首</span>-->
                        </div>
                        <div class="xinyh"><?php echo $_smarty_tpl->tpl_vars['v']->value["discount"];?>
</div>
                    </div>
                    <div class="qian">
                        <div class="rmb">￥</div>
                        <span class="yiqianliu"><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</span>
                        <div class="dizhi"><i class="iconfont icon-dizhi" style="font-size: 0.16rem"></i></div>
                        <div class="where"><?php echo $_smarty_tpl->tpl_vars['v']->value["start"];?>
</div>
                    </div>
                </div>
                </a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
</main>
</body>
</html><?php }
}
