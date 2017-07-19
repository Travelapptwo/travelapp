<?php
/* Smarty version 3.1.30, created on 2017-07-19 09:58:30
  from "D:\wamp\www\travelapp\mvc\template\admin\lookshops.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f1126396252_37343262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc0676da59d3bdcaab5ca94c89034e07dcf523fc' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\admin\\lookshops.html',
      1 => 1500449186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f1126396252_37343262 (Smarty_Internal_Template $_smarty_tpl) {
?>

</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <style>
        td{
            text-align: center;
        }
        input{
            width:100%;
            height:100%;
            background:none;
            outline:none;
            border: 0;
            float: left;
        }
    </style>
</head>
<body>
<!--<form action="index.php?m=admin&f=shop&a=zaddshop" method="post">-->

    <table class="table table-bordered table-hover">
        <tr class="success">

            <td>title</td>
            <td>posid</td>
            <td>keyword</td>
            <td>alltime</td>
            <td>discount</td>
            <td>price</td>
            <td>start</td>
            <td>end</td>
            <td>starttime</td>
            <td>traffic</td>
            <td>xingji</td>
            <td>routedetail</td>
            <td>操作</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr attr=<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
>
            <td attr="title"><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</td>
            <td attr="posid"><?php echo $_smarty_tpl->tpl_vars['v']->value["posid"];?>
</td>
            <td attr="keyword"><?php echo $_smarty_tpl->tpl_vars['v']->value["keyword"];?>
</td>
            <td attr="alltime"><?php echo $_smarty_tpl->tpl_vars['v']->value["alltime"];?>
</td>
            <td attr="discount"><?php echo $_smarty_tpl->tpl_vars['v']->value["discount"];?>
</td>
            <td attr="price"><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</td>
            <td attr="start"><?php echo $_smarty_tpl->tpl_vars['v']->value["start"];?>
</td>
            <td attr="end"><?php echo $_smarty_tpl->tpl_vars['v']->value["end"];?>
</td>
            <td attr="starttime"><?php echo $_smarty_tpl->tpl_vars['v']->value["starttime"];?>
</td>
            <td attr="traffic"><?php echo $_smarty_tpl->tpl_vars['v']->value["traffic"];?>
</td>
            <td attr="xingji"><?php echo $_smarty_tpl->tpl_vars['v']->value["xingji"];?>
</td>
            <td attr="routedetail"><?php echo $_smarty_tpl->tpl_vars['v']->value["routedetail"];?>
</td>
            <td><a href="index.php?m=admin&f=shop&a=delshop&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </table>


</body>
<?php echo '<script'; ?>
>
    $("td").dblclick(function(){
        var td=$(this);
        //1,取出当前td中的文本内容保存起来
        var text=td.text();
        //2,清空td里面的内容
        td.html(""); //也可以用td.empty();
        //3，建立一个文本框，也就是input的元素节点
        var input=$("<input>");
        //4，设置文本框的值是保存起来的文本内容
        input.attr("value",text);
        input.keyup(function(event){
            var myEvent =event||window.event;
            var kcode=myEvent.keyCode;
            if(kcode==13){
                var inputnode=$(this);
                var inputtext=inputnode.val();
                var tdNode=inputnode.parent();
                tdNode.html(inputtext);
                tdNode.click(tdclick);
            }
        });
        //5，将文本框加入到td中
        td.append(input);
        //6,清除点击事件
        td.unbind("click");
        input.focus();
        input.blur(function(){
            if($(this).val()==text){
                td.empty();
                td.html(text);
            }else {
                var id=td.parent("tr").attr("attr");
                var zd=td.attr("attr");
                var zhi=input.val();

                $.ajax({
                    url:"index.php?m=admin&f=shop&a=xg",
                    type: "POST",
                    data:{
                        id:id,zd:zd,zhi:zhi
                    },
                    success:function(data){
                        if(data==1){
                            td.empty();
                            td.html(zhi);
                        }else {
                            alert("修改失败");
                             td.empty();
                            td.html(text);
                        }
                    }
                })
            }
        })
    })
<?php echo '</script'; ?>
>
</html><?php }
}
