<?php
class category extends indexMain{
    function init(){
        $pid=$_GET["pid"];
        $db=new db("category");
        $res=$db->select("select name from category WHERE id={$pid}");
        $this->smarty->assign("categoryname",$res);
        $sql="select * from category where pid={$pid}";
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("category.html");
    }
}