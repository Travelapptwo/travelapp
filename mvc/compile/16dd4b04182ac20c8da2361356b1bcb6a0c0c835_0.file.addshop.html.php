<?php
/* Smarty version 3.1.30, created on 2017-07-19 09:58:28
  from "D:\wamp\www\travelapp\mvc\template\admin\addshop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f112408f178_24970838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16dd4b04182ac20c8da2361356b1bcb6a0c0c835' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\admin\\addshop.html',
      1 => 1500449186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f112408f178_24970838 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" charset="utf-8" src="<?php echo URL_PATH;?>
/static/editor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo URL_PATH;?>
/static/editor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo URL_PATH;?>
/static/editor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>

    <style>
        form{
            vertical-align: top;
        }
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
        #editor{
            display: inline-block;
            width:100%;
            margin: 0 auto;
        }
        .uploadbox{
            display: inline-block;
            vertical-align: top;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=shop&a=zaddshop" method="post">

    <table class="table table-bordered ">
        <tr>
            <td>title</td>
            <td>cid</td>
            <td>keyword</td>
            <td>alltime</td>
            <td>discount</td>
            <td>price</td>
            <td>start</td>
            <td>end</td>
            <td>starttime</td>
            <td>traffic</td>
            <td>xingji</td>
            <td>posid</td>
        </tr>
        <tr>
            <td><input type="text" name="title"></td>
            <td>  <select name="cid" id="ss" >
                <option value="0"  selected>一级分类</option>
            </select></td>

            <td><input type="text" name="keyword"></td>
            <td><input type="text" name="alltime"></td>
            <td><input type="text" name="discount"></td>
            <td><input type="text" name="price"></td>
            <td><input type="text" name="start"></td>
            <td><input type="text" name="end"></td>
            <td><input type="text" name="starttime"></td>
            <td><input type="text" name="traffic"></td>
            <td><input type="text" name="xingji"></td>
            <td>
                <select name="posid" id="" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['s']->value["posid"];?>
 ><?php echo $_smarty_tpl->tpl_vars['s']->value["posname"];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select></td>
        </tr>

    </table>
    <div class="nr"> 内容:</div>
     <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:500px;height:300px;" name="routedefall"><?php echo '</script'; ?>
>
    <input type="hidden" name="imgurl">
    <div class="uploadbox"></div>

    <input type="submit" class="btn btn-primary btn-lg btn-block" value="提交">
</form>
</body>
<?php echo '<script'; ?>
>
    var obj = new upload();
    obj.size = 1024 * 1024 * 8.6;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadbox")
    });
    obj.up("index.php?m=admin&f=shop&a=up",function(data){
        document.querySelector("input[name=imgurl]").value=data;
    });
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
        $("#ss").append(a);

    })
    var ue = UE.getEditor('editor');
//    var obj = new upload();
//    obj.size = 1024 * 1024 * 8.6;
//    obj.selectBtnStyle.background = "red";
//    obj.createView({
//        parent: document.querySelector(".uploadbox")
//    });
//    obj.up("upload.php",function(data){
//        document.querySelector("input[name=imgurl]").value=data;
//    });
<?php echo '</script'; ?>
>
</html><?php }
}
