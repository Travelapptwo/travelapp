<?php
/* Smarty version 3.1.30, created on 2017-07-19 10:28:06
  from "D:\wamp\www\travelapp\mvc\template\index\mymesschange.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f181609cc44_75801474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be51c2fa9637ba5612db5a28fdb413179e32bfff' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\index\\mymesschange.html',
      1 => 1500449186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f181609cc44_75801474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/gl-head-1.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>

</head>

<body>
    <div class="gl_head">
        <div class="gl_title"><span>更改信息</span></div>
        <div class="gl_leftI"><a href="index.php?m=index&f=myself&a=mymess"><img src="<?php echo IMG_PATH;?>
/gl1.png" alt=""></a></div>
        <div class="gl_rightI"><input type="submit" form="myform" value="保存"></div>
    </div>
    <div class="name" style="outline: none">
        <form name="myform" id="myform"  method="post">
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "ubirthday") {?>
            <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0][$_smarty_tpl->tpl_vars['type']->value];?>
" name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'upicture') {?>
            <input type="hidden" name="upicture" value="" class="upload">
            <div class="imgcheck"></div>
            <div class="picturebox"></div>

           <!-- <label class="upload">
                <div>缩略图:</div>
                <section>
                    <div style="overflow: hidden;">
                        <input type="file"  id="image1" name="aa">
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" id="myimg">
                        &lt;!&ndash;<div class="tipss">图片最大大小:2M 允许最大个数:3张</div>&ndash;&gt;
                    </div>
                    <div class="imgbox"></div>
                    <h3 class="h3">上传进度：</h3>
                    <div id="pre">
                        <div class="progress"></div>
                    </div>
                </section>
            </label>-->
            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'usex') {?>
              男：<input type="radio" name="usex" value="男" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]['usex'] == "男") {?>checked<?php }?> class="radio">
              女：<input type="radio" name="usex" value="女" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]['usex'] == "女") {?>checked<?php }?> class="radio">
            <?php } else { ?>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0][$_smarty_tpl->tpl_vars['type']->value];?>
" name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <?php }?>
        </form>
    </div>
    
</body>
</html>
<?php echo '<script'; ?>
>
    $("#myform").validate({
        rules:{
            unickname:{
                required:true,
                maxlength:15
            },
            umess:{
                required:true,
                maxlength:15
            },
            usex:{
                required:true,
                maxlength:3
            },
            uhome:{
                required:true,
                maxlength:15,
            },
            uschool:{
                required:true
            },
            ubirthday:{
                dateISO:true,
            }
        },
        messages:{
            unickname:{
                required:"请填写正确昵称",
                maxlength:"长度不能超过15个字符"
            },
            umess:{
                required:"请填写正确的个性签名",
                maxlength:"长度不能超过15个字符"
            },
            usex:{
                required:"请填性别",
                maxlength:"长度不能超过3个字符"
            },
            uhome:{
                required:"请填写内容",
                maxlength:"长度不能超过15个字符",
            },
            uschool:{
                required:"请写正确的学校信息",
            },
            ubirthday:'请输入正确的XXXX-XX-XX生日格式',
        },
        debug:true,
    });

/*    var obj=new Upload('index.php?m=index&f=myself&a=load',"img",$('[type=file]'),$(".imgbox"),$('#pre div'),$('#myimg'),function(){
        $('[type=submit]').attr('disabled','disabled');
    },function (text) {
        $('#myimg').val(text);
    },function () {
        $('[type=submit]').removeAttr('disabled');
    });
    obj.change();*/
   // console.log($("#myform").children().length);
   if($("#myform").children().length==3){
        var obj1=new upload();
        obj1.size=1024*1024*10;
        obj1.createView({
            parent:document.querySelector(".picturebox")
        });
        obj1.up("index.php?m=index&f=myself&a=load",function (data) {
            document.querySelector("input[name=upicture]").value=data;
        });
    }



    var flag=false;
    $("input[name]").change(function () {
        flag=true;
    })
    if($("input[name='picture']")){
        flag=true;
    }
    $('.gl_rightI').click(function () {
        if(flag){
            if(!$("#myform").valid()){
                return;
            }
            var data;
            if($(".upload input[type=hidden]").length!=0){
                data="type="+ $(".upload input[type=hidden]").attr('name')+"&"+$('form[name=myform]').serialize();
            }else{
                data="type="+$(".name input").attr("name")+"&"+$('form[name=myform]').serialize();
            }
            //console.log(data);
            $.ajax({
                url:"index.php?m=index&f=myself&a=messchangecheck",
                method:'post',
                data:data,
                success:function (text) {
                   //console.log(text);
                    if(text==1){
                        alert("修改成功");
                        location.href='index.php?m=index&f=myself&a=mymess';
                    }else{
                        alert("修改失败");
                    }
                }
            })
        }else{
            alert('信息未修改');
        }
    })
<?php echo '</script'; ?>
><?php }
}
