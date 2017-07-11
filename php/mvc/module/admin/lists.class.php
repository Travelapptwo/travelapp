<?php
class lists extends main{
    function add(){
        $db=new db("position");
        $re=$db->select();
        $this->smarty->assign("re",$re);
        $this->smarty->display("listsAdd.html");
    }
    function del(){
        $posid=$_GET["id"];
        echo $posid;
        $db=new db("position");
        $re=$db->where("posid=$posid")->del();
        if($re>0){
            $this->jump("删除成功","index.php?m=admin&f=lists&a=add");
        }else{
            $this->jump("删除失败","index.php?m=admin&f=lists&a=add");
        }
    }

}