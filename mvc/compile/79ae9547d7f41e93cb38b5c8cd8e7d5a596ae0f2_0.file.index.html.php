<?php
/* Smarty version 3.1.30, created on 2017-07-10 06:11:20
  from "E:\wamp\www\travelapp\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962fe68d26206_15117224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ae9547d7f41e93cb38b5c8cd8e7d5a596ae0f2' => 
    array (
      0 => 'E:\\wamp\\www\\travelapp\\mvc\\template\\index\\index.html',
      1 => 1499659495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962fe68d26206_15117224 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
        mui.init();
        $(function () {
            $(".mui-scroll>a").first().addClass("mui-active");
            var gallery = mui('.mui-slider');
            gallery.slider({
                interval: 2000
            });

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
/sy_banner4.jpg"/></a></div>
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
<!--DESIGEr takling-->
<div class="banner-bottom">
    <div class="title">
        <p>DESIGEr takling</p>
        <p>
            <img src="<?php echo IMG_PATH;?>
/sy_sanjiao.png" alt="">
            <span>4'32"</span>
        </p>
        <ul class="wujiaoxing">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <p>生活是不断需程也是不断而非简单享乐的过程</p>
    <div class="info">
        <div class="touxiang">
            <img src="<?php echo IMG_PATH;?>
/sy_touxiang1.png" alt="">
        </div>
        <p>Jim.Green</p>
        <div class="address">
            <img src="<?php echo IMG_PATH;?>
/sy_adress.png" alt="">
            <p>Queen.N.Y</p>
        </div>
        <div class="time">
            <img src="<?php echo IMG_PATH;?>
/sy_time.png" alt="">
            <p>4.26 2017</p>
        </div>
    </div>
</div>
<!--列表-->
<div class="liebiao">
    <ul>
        <li>
            <a href="">
                <div class="liebiao_top">
                    <div class="mark"></div>
                    <img src="<?php echo IMG_PATH;?>
/sy_liebiao1.jpg" alt="" class="liebiao_img">
                    <img src="<?php echo IMG_PATH;?>
/sy_zhaoxiangji.png" alt="" class="zhaoxiangji">
                </div>
                <div class="liebiao_bottom">
                    <p class="title_zimu">zhoubian</p>
                    <p class="title_zhongwen">周<span>•</span>边<span>•</span>游</p>
                    <div class="wujiaoxing">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                    </div>
                    <p class="title">ZHOUBIANXINGB.ANKUAI</p>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <div class="liebiao_top">
                    <div class="mark"></div>
                    <img src="<?php echo IMG_PATH;?>
/sy_liebiao1.jpg" alt="" class="liebiao_img">
                    <img src="<?php echo IMG_PATH;?>
/sy_zhaoxiangji.png" alt="" class="zhaoxiangji">
                </div>
                <div class="liebiao_bottom">
                    <p class="title_zimu">zhoubian</p>
                    <p class="title_zhongwen">周<span>•</span>边<span>•</span>游</p>
                    <div class="wujiaoxing">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                    </div>
                    <p class="title">ZHOUBIANXINGB.ANKUAI</p>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <div class="liebiao_top">
                    <div class="mark"></div>
                    <img src="<?php echo IMG_PATH;?>
/sy_liebiao1.jpg" alt="" class="liebiao_img">
                    <img src="<?php echo IMG_PATH;?>
/sy_zhaoxiangji.png" alt="" class="zhaoxiangji">
                </div>
                <div class="liebiao_bottom">
                    <p class="title_zimu">zhoubian</p>
                    <p class="title_zhongwen">周<span>•</span>边<span>•</span>游</p>
                    <div class="wujiaoxing">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/sy_wujiaoxing2.png" alt="">
                    </div>
                    <p class="title">ZHOUBIANXINGB.ANKUAI</p>
                </div>
            </a>
        </li>
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
            <a href="">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan1.png" alt="" class="title_img">
                <p class="title_english">HAINANSANYAYOU</p>
                <p class="title_chinese">海南三亚5日跟团游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><p>+</p></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2405起</p>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan1.png" alt="" class="title_img">
                <p class="title_english">HAINANSANYAYOU</p>
                <p class="title_chinese">海南三亚5日跟团游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><p>+</p></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2405起</p>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan1.png" alt="" class="title_img">
                <p class="title_english">HAINANSANYAYOU</p>
                <p class="title_chinese">海南三亚5日跟团游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><p>+</p></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2405起</p>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="<?php echo IMG_PATH;?>
/sy_xihuan1.png" alt="" class="title_img">
                <p class="title_english">HAINANSANYAYOU</p>
                <p class="title_chinese">海南三亚5日跟团游</p>
                <ul class="touxiang">
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>
/sy_cntx1.png" alt=""></li>
                    <li><p>+</p></li>
                </ul>
                <div class="money">
                    <img src="<?php echo IMG_PATH;?>
/sy_qian.png" alt="">
                    <p>2405起</p>
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
            <a href="##">
                <img src="<?php echo IMG_PATH;?>
/sy_wode.png" alt="">
                <span>我的</span>
            </a>
        </li>

    </ul>
</footer>
</body>
</html>
<?php echo '<script'; ?>
>
    //倒计时
    function setTime() {
        var nowdate = new Date();
        var targettime = new Date(2017,6, 11, 0, 0, 0);
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
<?php echo '</script'; ?>
><?php }
}