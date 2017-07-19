<?php
/* Smarty version 3.1.30, created on 2017-07-19 09:58:21
  from "D:\wamp\www\travelapp\mvc\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f111dd92661_44645662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9300f7403298b88b54cabb8a57ef3da2252f3c0' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\admin\\addUser.html',
      1 => 1500449186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f111dd92661_44645662 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style>
        body,html{
            width:100%;
            height:100%;
            overflow: hidden;
            padding: 100px;
        }

    </style>
</head>
<body>
<form class="form-horizontal" action="index.php?m=admin&f=user&a=addCon" method="post">
    <!--<div class="form-group">-->
        <!--<label for="inputEmail3" class="col-sm-2 control-label">角色</label>-->
        <!--<div class="col-sm-10">-->
            <!--<select class="form-control" name="rid">-->
                <!--<option>&#45;&#45;请选择角色&#45;&#45;</option>-->
                <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>-->
                <!--<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">-->
                    <!--<?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>
-->
                <!--</option>-->
                <!--<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->
            <!--</select>-->
        <!--</div>-->
    <!--</div>-->
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" name="uname" class="form-control" id="inputEmail3" placeholder="USER">
        </div>
    </div>

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="upass" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>

    <!--<div class="form-group">-->
        <!--<label for="inputPassword3" class="col-sm-2 control-label">昵称</label>-->
        <!--<div class="col-sm-10">-->
            <!--<input type="text" name="nichen" class="form-control" id="inputPassword3" placeholder="昵称">-->
        <!--</div>-->
    <!--</div>-->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
