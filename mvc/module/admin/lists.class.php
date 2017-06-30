<?php
class lists extends main{
    function add(){
        $db=new db("lists");
        $num=$db->select("select count(sid) as sid from lists");
//        var_dump($num);
//        exit();
        $page=new page();
        $page->pageNum=1;
        $page->total=$num[0]["sid"];
        $str=$page->show();
        $limit=$page->limit;
//        echo $str;
        $this->smarty->assign("pages",$str);

        $sql="select lists.* ,category.cname ,member.mname from lists,category,member where lists.cid=category.cid and lists.mid=member.mid ".$limit;
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("listsAdd.html");
    }

}