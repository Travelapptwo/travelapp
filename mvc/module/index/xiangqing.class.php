<?php
class xiangqing extends indexMain{
    function init(){
        $db=new db("lists");
        $num=$db->select("select count(id) as sid from lists");
//        var_dump($num);
//        exit();
        $page=new page();
        $page->pageNum=1;
        $page->total=$num[0]["sid"];
        $str=$page->show();
        $limit=$page->limit;
//        echo $str;
        $this->smarty->assign("pages",$str);
        $sql="select * from lists";
//        $sql="select lists.* ,category.cname ,member.mname from lists,category,member where lists.cid=category.cid and lists.mid=member.mid ".$limit;
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("xiangqing.html");
    }
    function findmessage(){
        $lid=$_GET["lid"];
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