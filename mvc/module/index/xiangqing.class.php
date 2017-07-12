<?php
class xiangqing extends indexMain{
    function init(){
        $db=new db("lists");
        $id=$_GET["id"];
        $sql="select * from lists where lists.id={$id}";
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("xiangqing.html");
    }
    function findmessage(){
        $lid=$_GET["lid"];
//        echo $lid;
//        exit();
        $db=new db("message");
        $sql="select message.message,message.mtime,user.uname from message,user where lid={$lid} and user.uid=message.uid";

        $results=$db->select($sql);
        $array = array();
        foreach ($results as $v){
            $array[] = $v;
        }
        echo json_encode($array);
    }
}