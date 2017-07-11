<?php
/* Smarty version 3.1.30, created on 2017-07-11 06:01:57
  from "E:\sahd\wamp\www\php\mvc\template\admin\addfl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59644db5ab7412_99160033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '523dc4caa24b9cb9b44dece173f78aeabd994a21' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\php\\mvc\\template\\admin\\addfl.html',
      1 => 1499745715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59644db5ab7412_99160033 (Smarty_Internal_Template $_smarty_tpl) {
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
            <td>分类</td>
            <td>name</td>
            <td>Ename</td>
            <td>xingji</td>
            <td>操作</td>
        </tr>
        <tr>
            <td>
                <select name="pid" id="" >
                    <option value="0"  selected>一级分类</option>
                </select>
            </td>
            <td ><input type="text" name="name"></td>
            <td ><input type="text" name="Ename"></td>
            <td ><input type="text" name="xingji"></td>

            <td><input type="submit" value="提交"></td>
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


        arrr.forEach(function(e,i){
            var L="";
            for (var i=0;i<e["a"];i++){
                L+="L";
            }
           var a='<option value='+e['id']+'>'+L+e['name']+'</option>';
           $("select").append(a);

        })
<?php echo '</script'; ?>
>
</html><?php }
}
