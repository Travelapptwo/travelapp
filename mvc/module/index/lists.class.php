<?php
class lists extends indexMain{
    function init(){
        $db=new db("lists");
        $cid=$_GET["cid"];
        $sql="select lists.title,lists.id,lists.alltime,lists.discount,lists.xingji,lists.start,lists.price,lists.price from lists where lists.cid={$cid}";
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
//        $this->smarty->assign("cid",$cid);
        $this->smarty->display("list.html");
    }

}