<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:16:24
  from "E:\sahd\wamp\www\php\mvc\template\admin\lookfl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964a57802f803_51610056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c101f125d7d9c58d5548dc8ddf18e40ed6db114' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\php\\mvc\\template\\admin\\lookfl.html',
      1 => 1499768182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964a57802f803_51610056 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
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
<form action="index.php?m=admin&f=shop&a=addfl" method="post">

    <table class="table table-bordered">
        <tr>
            <td>标题</td>
            <td>name</td>
            <td>Ename</td>
            <td>xingji</td>
            <td>操作</td>
        </tr>

    </table>
</form>
</body>
<?php echo '<script'; ?>
>
    var arr=[];
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    arr.push({
        id:<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
,
        name:'<?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
',
        pid:<?php echo $_smarty_tpl->tpl_vars['v']->value["pid"];?>
,
        Ename:'<?php echo $_smarty_tpl->tpl_vars['v']->value["Ename"];?>
',
        xingji:'<?php echo $_smarty_tpl->tpl_vars['v']->value["xingji"];?>
'
    });
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    var a=0;
    var arrr=[];
    function getTree(pid,a){
        a++;
        arr.forEach(function(e,i){
//            console.log(e["pid"]);
            if(e["pid"]==pid){

                e["a"]=a;
                cid=e["id"];
                arrr.push(e);
                getTree(cid,a);
            }

        })
    }
    getTree(0,0);

    console.log(arrr);
    arrr.forEach(function(e,i){
        var a='<tr attr='+e['id']+'><td>'+e['a']+'级标题</td><td class="bj" attr="name">'+e['name']+'</td><td class="bj" attr="Ename">'+e['Ename']+'</td><td class="bj" attr="xingji">'+e['xingji']+'</td><td><a href="index.php?m=admin&f=shop&a=del&id='+e['id']+'">删除</a></td></tr>';
        $("table").append(a);
        console.log(a);
    })
    $(".table").delegate("td","dblclick",function(){
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
                    url:"index.php?m=admin&f=shop&a=xgfl",
                    type: "POST",
                    data:{
                        id:id,zd:zd,zhi:zhi
                    },
                    success:function(data){
                        if(data==1){
                            td.empty();
                            td.html(zhi);
                        }else {
                            alert(data);
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
