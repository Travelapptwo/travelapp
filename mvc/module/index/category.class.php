<?php
class category extends indexMain{
    function init(){
        $pid=$_GET["pid"];
        $db=new db("category");
        $sql="select * from category where pid={$pid}";
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("category.html");
    }
}