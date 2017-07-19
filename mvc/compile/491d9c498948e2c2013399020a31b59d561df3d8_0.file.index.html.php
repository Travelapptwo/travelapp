<?php
/* Smarty version 3.1.30, created on 2017-07-19 11:57:15
  from "D:\wamp\www\travelapp\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f2cfb67f167_98234890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491d9c498948e2c2013399020a31b59d561df3d8' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\index\\index.html',
      1 => 1500458137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f2cfb67f167_98234890 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximun-scale=1,user-scalable=no">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="<?php echo CSS_PATH;?>
/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/main.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
        mui.init();
        $(function () {
            $(".mui-scroll>a").first().addClass("mui-active");
            var gallery = mui('.mui-slider');
            gallery.slider({
                interval: 2000
            });

            //退出登陆
            $(".logout").click(function () {
                $.ajax({
                    url: "index.php?m=index&f=login&a=logout",
                    type: "post",
                    success: function (e) {
                        if (e == "ok") {
                            location.href = "index.php";
                        }
                    }
                })
            });
            //倒计时
            function setTime() {
                var nowdate = new Date();
                var targettime = new Date(2017, 7, 13, 0, 0, 0);
                var cha = targettime.getTime() - nowdate.getTime();
                var hours = Math.floor(cha / (1000 * 60 * 60));
                var minutes = Math.floor(cha / (1000 * 60) % 60);
                var seconds = Math.floor(cha / 1000 % 60);
                $(".time-hour").html(hours < 10 ? "0" + hours : hours);
                $(".time-minute").html(minutes < 10 ? "0" + minutes : minutes);
                $(".time-second").html(seconds < 10 ? "0" + seconds : seconds);
            }

            setTime();
            setInterval(setTime, 1000);

            var mySwiper = new Swiper('.swiper-container',{
                slidesPerView : 2.5,//'auto'
//slidesPerView : 3.7,
            })
        });
    <?php echo '</script'; ?>
>
</head>
<body>
<!--banner-->
<div class="banner">
    <div class="mui-slider">
        <div class="mark" style="z-index: 998"></div>
        <div class="mui-slider-group">
            <div class="mui-slider-item"><a href="#"><img src="<?php echo IMG_PATH;?>
/sy_banner1.png"/></a></div>
            <div class="mui-slider-item"><a href="#"><img src="<?php echo IMG_PATH;?>
/sy_banner2.jpg"/></a></div>
            <div class="mui-slider-item"><a href="#"><img src="<?php echo IMG_PATH;?>
/sy_banner3.jpg"/></a></div>
            <div class="mui-slider-item"><a href="#"><img src="<?php echo IMG_PATH;?>
/banner5.jpg"/></a></div>
        </div>
    </div>
    <header>
        <div class="header-left">
            <img src="<?php echo IMG_PATH;?>
/sy_ztb.png" alt="">
        </div>
        <div class="header-middle">
            <div class="dian zuo"></div>
            <div class="dian you"></div>
            <p>Want to go...</p>
            <img src="<?php echo IMG_PATH;?>
/sy_huatong.png" alt="">
        </div>
        <div class="header-right">
            <img src="<?php echo IMG_PATH;?>
/sy_ytb1.png" alt="">
        </div>

    </header>
    <div class="banner-text">
        <p>DESIGE CHANGE OUR LIFE</p>
        <p>C H A N G E T H E W O R D</p>
    </div>
</div>
<!--user-->

<div class="banner-bottom">
    <img src="<?php echo IMG_PATH;?>
/sy_userback.png" alt="">
    <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultus']->value, 'uv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uv']->value) {
?>
    <div class="title">
        <p>User message</p>
        <ul class="wujiaoxing">
            <span><?php echo $_smarty_tpl->tpl_vars['uv']->value["usex"];?>
</span>
            <p class="logout">登出</p>
        </ul>

    </div>
    <p style="padding-left: 0.8rem"><?php echo $_smarty_tpl->tpl_vars['uv']->value["umess"];?>
</p>
    <div class="info">
        <div class="touxiang">
            <img src="<?php echo IMG_PATH;?>
/sy_touxiang1.png" alt="">
        </div>
        <p><?php echo $_smarty_tpl->tpl_vars['uv']->value["unickname"];?>
</p>
        <div class="address">
            <img src="<?php echo IMG_PATH;?>
/sy_dizhi.png" alt="">
            <p><?php echo $_smarty_tpl->tpl_vars['uv']->value["uhome"];?>
</p>
        </div>
        <div class="time">
            <img src="<?php echo IMG_PATH;?>
/sy_time.png" alt="">
            <p><?php echo $_smarty_tpl->tpl_vars['uv']->value["ubirthday"];?>
</p>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php } else { ?>
    <div class="wel">
        欢迎您光临惜游，请先
        <a href="index.php?m=index&f=index&a=logins" class="loginBtn">
            登陆
        </a>，没有账号欢迎
        <a href="index.php?m=index&f=index&a=register" class="regBtn">
            注册
        </a></div>
    <?php }?>
</div>

<!--列表-->
<div class="liebiao swiper-container">
    <ul class="swiper-wrapper">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="swiper-slide">
            <a href="index.php?m=index&f=category&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <!--<div class="xingji"><?php echo $_smarty_tpl->tpl_vars['v']->value['xingji'];?>
</div>-->
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['xingji'];?>
">
                <div class="liebiao_top">
                    <div class="mark"></div>
                    <img src="<?php echo IMG_PATH;?>
/sy_liebiao1.jpg" alt="" class="liebiao_img">
                    <img src="<?php echo IMG_PATH;?>
/sy_zhaoxiangji.png" alt="" class="zhaoxiangji">
                </div>

                <div class="liebiao_bottom">
                    <p class="title_zimu"><?php echo $_smarty_tpl->tpl_vars['v']->value["Ename"];?>
</p>
                    <p class="title_zhongwen"><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</p>
                    <div class="wujiaoxing">
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['v']->value['xingji']+1 - (1) : 1-($_smarty_tpl->tpl_vars['v']->value['xingji'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <?php }
}
?>

                    </div>
                    <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value["Ename"];?>
B.ANKUAI</p>
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
<!--抢购-->
<div class="qianggou">
    <img src="<?php echo IMG_PATH;?>
/sy_qianggou.png" alt="" class="qianggouimg">
    <img src="<?php echo IMG_PATH;?>
/sy_qianggouzi.png" alt="" class="qianggouzi">
    <div class="jdms-top-time">
        <div class="time-hour">01</div>
        <div class="time-dian">
            <div class="time-dian-top"></div>
            <div class="time-dian-bottom"></div>
        </div>
        <div class="time-minute">36</div>
        <div class="time-dian">
            <div class="time-dian-top"></div>
            <div class="time-dian-bottom"></div>
        </div>
        <div class="time-second">56</div>
    </div>
</div>
<!--猜你喜欢-->
<div class="caini">
    <div class="caini-title">
        <img src="<?php echo IMG_PATH;?>
/sy_cainititle.png" alt="">
    </div>
    <ul class="caini-con">
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan1.png" alt="" class="title_img">
                <p class="title_english">MAOLIQIUSIYOU</p>
                <p class="title_chinese">毛里求斯3日跟团游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2499起</p>
                </div>
            </a>
        </li>
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan2.jpg" alt="" class="title_img">
                <p class="title_english">XIAWEIYIYOU</p>
                <p class="title_chinese">夏威夷2日自驾游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2405起</p>
                </div>
            </a>
        </li>
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan3.jpg" alt="" class="title_img">
                <p class="title_english">MALAIXIYAYOU</p>
                <p class="title_chinese">马来西亚5日跟团游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2235起</p>
                </div>
            </a>
        </li>
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan4.jpg" alt="" class="title_img">
                <p class="title_english">HAINANSANYAYOU</p>
                <p class="title_chinese">海南三亚5日跟团游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt=""></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2150起</p>
                </div>
            </a>
        </li>
    </ul>
</div>
<!--footer-->
<footer>
    <ul>
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_shouye.png" alt="">
                <span>首页</span>
            </a>
        </li>
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_faxian.png" alt="">
                <span>发现</span>
            </a>
        </li>
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_gengduo.png" alt="">
            </a>
        </li>
        <li>
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_fuwu.png" alt="">
                <span>服务</span>
            </a>
        </li>
        <li>
            <a href="index.php?m=index&f=myself">
                <img src="<?php echo IMG_PATH;?>
/sy_wode.png" alt="">
                <span>我的</span>
            </a>
        </li>

    </ul>
</footer>
</body>
</html>
<?php }
}
