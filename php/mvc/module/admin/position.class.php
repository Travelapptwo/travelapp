<?php
class position extends main{
    function add(){
        $this->smarty->display("addPos.html");
    }


    function addCon(){
        $posname=$_POST["posname"];
        $db=new db("position");
        $re=$db->select();
        if($posname==""){
            $this->jump("位置不能为空","index.php?m=admin&f=position&a=add");
            exit();
        }
       foreach($re as $v){
           if($posname=$v["posname"]){
               $this->jump("位置已经存在","index.php?m=admin&f=position&a=add");
               exit();
           }
       }
        if($db->insert("posname='{$posname}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=position&a=add");
            exit();
        }
    }
}