<?php
/* Smarty version 3.1.30, created on 2017-06-30 09:23:17
  from "E:\wamp\www\php\mvc\template\admin\listsAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955fc65b78f51_24173856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13a95f5da917b2d030305dd8abd614b2f8720bf4' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\admin\\listsAdd.html',
      1 => 1498804087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5955fc65b78f51_24173856 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
   <table class="table table-striped">
        <tr>
            <th>
                id
            </th>
            <th>
                所属分类
            </th>
            <th>
                stitle
            </th>
            <th>
                推荐位
            </th>
            <th>
                状态
            </th>
            <th>
                发表时间
            </th>
            <th>
                操作
            </th>
        </tr>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["posid"];?>

            </td>
            <td>

                <?php if ($_smarty_tpl->tpl_vars['v']->value["status"] == 0) {?>
                  未审核
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 1) {?>
                   审核中
                <?php } else { ?>
                   通过
                <?php }?>
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>

            </td>
            <td>
                <a href="index.php?m=admin&f=lists&a=del&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>

                <a href="index.php?m=admin&f=lists&a=edit&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">编辑</a>

                
            </td>
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
