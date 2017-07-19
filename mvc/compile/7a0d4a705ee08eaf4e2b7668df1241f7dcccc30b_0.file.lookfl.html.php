<?php
/* Smarty version 3.1.30, created on 2017-07-19 09:58:26
  from "D:\wamp\www\travelapp\mvc\template\admin\lookfl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f1122272918_63096512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a0d4a705ee08eaf4e2b7668df1241f7dcccc30b' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\admin\\lookfl.html',
      1 => 1500449186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f1122272918_63096512 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jq.js"><?php echo '</script'; ?>
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

    <table class="table table-hover  table-bordered">
        <tr class="success">
            <td>标题</td>
            <td>name</td>
            <td>Ename</td>
            <td>xingji</td>
            <td>操作</td>
        </tr>

    </table>

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
        var a='<tr attr='+e['id']+'><td>'+e['a']+'级标题</td><td class="bj" attr="name">'+e['name']+'</td><td class="bj" attr="Ename">'+e['Ename']+'</td><td class="bj" attr="xingji">'+e['xingji']+'</td><td class="sc" >删除</td></tr>';
        $("table").append(a);

    });
    $(".table").delegate(".sc","click",function(){
        var id=$(this).parent("tr").attr("attr");
        var sc=$(this);
        for(var z=0;z<arrr.length;z++){
            if(arrr[z]["pid"]==id){
                alert("有子类不能删除");
               return;
            }
        }
        location.href='index.php?m=admin&f=shop&a=del&id='+id;
        return;
    });
    $(".table").delegate(".bj","dblclick",function(){
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
