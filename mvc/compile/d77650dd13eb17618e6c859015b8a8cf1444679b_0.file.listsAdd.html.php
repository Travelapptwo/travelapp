<?php
/* Smarty version 3.1.30, created on 2017-07-15 03:05:05
  from "F:\wamp\www\travelapp\mvc\template\admin\listsAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59696a41b2a1e9_00700010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd77650dd13eb17618e6c859015b8a8cf1444679b' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\admin\\listsAdd.html',
      1 => 1499623074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59696a41b2a1e9_00700010 (Smarty_Internal_Template $_smarty_tpl) {
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
        td{
            text-align: center;
        }

    </style>
</head>
<body>
<table class="table table-bordered">
    <tr>
        <td>id</td>
        <td>位置</td>
        <td>操作</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>
</td>
        <td><a href="index.php?f=lists&m=admin&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">删除</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</table>
</body>
</html><?php }
}
