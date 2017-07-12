<?php
/* Smarty version 3.1.30, created on 2017-07-12 03:37:23
  from "F:\wamp\www\travelapp\mvc\template\index\myself.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59657d535845a7_39233921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b3973db0ae16909e299da769bc84aeb527dc19' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\index\\myself.html',
      1 => 1499823338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59657d535845a7_39233921 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/wyb_wd.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $(".exit").click(function () {
                history.back();
            })
            $(".exitlogin").click(function () {
                $.ajax({
                    url:"index.php?m=index&f=login&a=logout",
                    success:function (e) {
                        console.log(e);
                        if(e=="ok"){
                            alert("退出成功");
                            location.href="index.php";
                        }
                    }
                })
            });
        })
    <?php echo '</script'; ?>
>
</head>
<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
<body>

    <div class="header" style="position: absolute;top: 0.24rem;width: 100%;left: 0;z-index: 100;">
        <div class="exit" style="position: absolute;top: 0;left: 0.24rem;background: url('<?php echo IMG_PATH;?>
/xk-exit.png');background-size:100%;width: 0.46rem;height: 0.46rem;"></div>
    </div>
    <div class="wyb_banner">
        <!--<div class="mb" style="background: rgba(49, 115, 253, 0.2);width: 100%;height: 100%"></div>-->
            <div class="yuan">
                <div></div>
                <div></div>
                <div style="background-image: url('<?php if ($_smarty_tpl->tpl_vars['result']->value[0]['upicture']) {?> <?php echo $_smarty_tpl->tpl_vars['result']->value[0]['upicture'];?>
 <?php } else { ?> <?php echo IMG_PATH;?>
/wyb_02.png <?php }?>      ')">
                    <a href=""></a></div>
            </div>

        <p><?php echo $_smarty_tpl->tpl_vars['result']->value[0]['unickname'];?>
</p>
        <h3><?php if ($_smarty_tpl->tpl_vars['result']->value[0]['umess']) {?> <?php echo $_smarty_tpl->tpl_vars['result']->value[0]['umess'];?>
 <?php } else { ?>  这个人很懒，什么也没留下<?php }?></h3>

    </div>
<!--    <div class="wyb_bar1">
        <div class="nks">
            <div class="tz">
                <a href="">
                    <p>0</p>
                    <p>我的帖子</p>
                    <div class="box"></div>
                </a>
            </div>
            <div class="tz">
                <a href="">
                    <p>8</p>
                    <p>我的关注</p>
                    <div class="box"></div>
                </a>
            </div>
            <div class="tz tz1">
                <a href="">
                    <h3>新增<span>1</span></h3>
                    <p>1</p>
                    <p>我的粉丝</p>
                </a>
                <div class="box"></div>
            </div>
            <div class="tz">
                <a href="">
                    <p>0</p>
                    <p>谁看过我</p>
                </a>
            </div>
        </div>
    </div>-->
    <div class="wyb_bar2">  
        <a class="btn" href="index.php?m=index&f=myself&a=mymess">
            <div class="nk">
                <img class="tu1" src="<?php echo IMG_PATH;?>
/wd_03.png" alt="">
                <p class="wd">会员中心</p>
                <img class="tu2" src="<?php echo IMG_PATH;?>
/wd_18.png" alt="">
            </div>
        </a>
    </div>
    <div class="wyb_bar2 wyb_bar3">
        <a class="btn" href="javascript:;">
            <div class="nk">
                <img class="tu1" src="<?php echo IMG_PATH;?>
/wd_23.png" alt="">
                <p class="wd">我的钱包</p>
                <img class="tu2" src="<?php echo IMG_PATH;?>
/wd_18.png" alt="">
            </div>
        </a>
    </div>
    <div class="wyb_bar2 ">
        <a class="btn" href="javascript:;">
            <div class="nk">
                <img class="tu1" src="<?php echo IMG_PATH;?>
/wd_07.png" alt="">
                <p class="wd">我的订单</p>
                <img class="tu2" src="<?php echo IMG_PATH;?>
/wd_18.png" alt="">
            </div>
        </a>
    </div>
    <div class="wyb_bar2 wyb_bar4">
        <a class="btn" href="javascript:;">
            <div class="nk">
                <img class="tu1" src="<?php echo IMG_PATH;?>
/wd_15.png" alt="">
                <p class="wd">浏览历史</p>
                <img class="tu2" src="<?php echo IMG_PATH;?>
/wd_18.png" alt="">

            </div>
        </a>
    </div>
    <div class="wyb_bar2 wyb_bar3">
        <a class="btn" href="javascript:;">
            <div class="nk">
                <img class="tu1" src="<?php echo IMG_PATH;?>
/wd_15.png" alt="">
                <p class="wd">我的留言</p>
                <img class="tu2" src="<?php echo IMG_PATH;?>
/wd_18.png" alt="">
            </div>
        </a>
    </div>
    <footer style="position: absolute;bottom: 1.2rem;width: 100%;height: auto">
        <button type="button" class="mui-btn mui-btn-primary exitlogin" style="width: 100%">退出登录</button>
    </footer>
    <footer style="width: 100%;height: 1rem;background: #fff;position: fixed;bottom: 0;
    left: 0;">
        <ul>
            <li>
                <a href="index.php">
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
<?php } else {
echo '<script'; ?>
>
    alert("您还未登录！");
    location.href="index.php?m=index&f=index&a=logins";
<?php echo '</script'; ?>
>
<?php }?>
</html><?php }
}
