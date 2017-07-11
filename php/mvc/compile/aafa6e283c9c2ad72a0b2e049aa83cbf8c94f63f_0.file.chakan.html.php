<?php
/* Smarty version 3.1.30, created on 2017-07-09 19:31:35
  from "E:\sahd\wamp\www\php\mvc\template\admin\chakan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59626877ec4296_23356821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aafa6e283c9c2ad72a0b2e049aa83cbf8c94f63f' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\php\\mvc\\template\\admin\\chakan.html',
      1 => 1499621492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59626877ec4296_23356821 (Smarty_Internal_Template $_smarty_tpl) {
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
        <td>name</td>
        <td>操作</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aname"];?>
</td>
        <td><a href="index.php?f=user&m=admin&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
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
