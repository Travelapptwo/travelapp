<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:26:44
  from "F:\wamp\www\travelapp\mvc\template\index\category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964a7e436e505_90203966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4fb73fe70636e80f2df294d954161a540c849e7' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\index\\category.html',
      1 => 1499757859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964a7e436e505_90203966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/c-main.css"/>
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_tgrlk8guf7833di.css" />

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
			<div class="zi">WANT  TO  GO...</div>
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
		<div class="m-header">
			<div class="zbywt">ZHOUBIANYOU</div>
			<div class="zbhyt"><?php echo $_smarty_tpl->tpl_vars['categoryname']->value[0]["name"];?>
分类</div>
			<div class="yuanj"></div>
		</div>
		<div class="con">
			<!--<div class="yuanjiao"></div>-->
			<ul class="nr">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<li>
					<a href="index.php?m=index&f=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="color: #999;">
					<div class="tu"></div>
					<div class="tit">
						<div class="hanyu"><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</div>
						<div class="yingyu"><?php echo $_smarty_tpl->tpl_vars['v']->value["Ename"];?>
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
			<div class="yjx"></div>
			<div class="yjx1"></div>
			<div class="yjx2"></div>
			<div class="yjx3"></div>
		</div>
		
		<div class="m-header">
			<div class="zbywt">ZHOUBIANYOU</div>
			<div class="zbhyt">热门推荐</div>
			
		</div>
		<div class="tuijian-con">
			<ul class="tuijiannr">
				<li class="remen">
					<div class="left-tu"></div>
					<div class="right-box">
						<div class="right-title">山西崇宁岛温泉酒店一晚+双人游</div>
						<div class="right-title1">班期：劳动节、周一至周日</div>
						<ul class="xing">
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<div class="shop">月售10单</div>
						<div class="first">
							<div class="shouzi">首
								<!--<span>首</span>-->
							</div>
							<div class="xinyh">新用户立减200元</div>
						</div>
						<div class="qian">
							<div class="rmb">￥</div>
							<span class="yiqianliu">1600</span>
							<div class="dizhi"><i class="iconfont icon-dizhi"></i></div>
							<div class="where">TaiYuan.S.X</div>
							
							<ul class="touxiang">
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="num">4512</div>
						</div>
					</div>
				<li class="remen">
					<div class="left-tu"></div>
					<div class="right-box">
						<div class="right-title">山西崇宁岛温泉酒店一晚+双人游</div>
						<div class="right-title1">班期：劳动节、周一至周日</div>
						<ul class="xing">
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<div class="shop">月售10单</div>
						<div class="first">
							<div class="shouzi">首
								<!--<span>首</span>-->
							</div>
							<div class="xinyh">新用户立减200元</div>
						</div>
						<div class="qian">
							<div class="rmb">￥</div>
							<span class="yiqianliu">1600</span>
							<div class="dizhi"><i class="iconfont icon-dizhi"></i></div>
							<div class="where">TaiYuan.S.X</div>
							
							<ul class="touxiang">
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="num">4512</div>
						</div>
					</div>
				</li>
				<li class="remen">
					<div class="left-tu"></div>
					<div class="right-box">
						<div class="right-title">山西崇宁岛温泉酒店一晚+双人游</div>
						<div class="right-title1">班期：劳动节、周一至周日</div>
						<ul class="xing">
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<div class="shop">月售10单</div>
						<div class="first">
							<div class="shouzi">首
								<!--<span>首</span>-->
							</div>
							<div class="xinyh">新用户立减200元</div>
						</div>
						<div class="qian">
							<div class="rmb">￥</div>
							<span class="yiqianliu">1600</span>
							<div class="dizhi"><i class="iconfont icon-dizhi"></i></div>
							<div class="where">TaiYuan.S.X</div>
							
							<ul class="touxiang">
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="num">4512</div>
						</div>
					</div>
				</li>
				<li class="remen">
					<div class="left-tu"></div>
					<div class="right-box">
						<div class="right-title">山西崇宁岛温泉酒店一晚+双人游</div>
						<div class="right-title1">班期：劳动节、周一至周日</div>
						<ul class="xing">
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<div class="shop">月售10单</div>
						<div class="first">
							<div class="shouzi">首
								<!--<span>首</span>-->
							</div>
							<div class="xinyh">新用户立减200元</div>
						</div>
						<div class="qian">
							<div class="rmb">￥</div>
							<span class="yiqianliu">1600</span>
							<div class="dizhi"><i class="iconfont icon-dizhi"></i></div>
							<div class="where">TaiYuan.S.X</div>
							
							<ul class="touxiang">
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="num">4512</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</main>
</body>
</html><?php }
}
