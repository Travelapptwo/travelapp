<?php
class user extends main {
//    function __construct()
//    {
//        parent::
//    }
    function chakan(){
        $db=new db("admin");
        $result=$db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("chakan.html");

    }

    function add(){
//        if($this->session->get("rid")!=1){
//            $this->jump("没有权限","index.php?m=admin&f=login.class.php&a=main");
//            exit;
//        }
//        $db=new db("user");
//        $result=$db->select();
//        $this->smarty->assign("roles",$result);
        $this->smarty->display("addUser.html");
    }
    function del(){
        $aid=$_GET["id"];

        $db=new db("admin");
        $re=$db->where("aid=$aid")->del();
        if($re>0){
            $this->jump("删除成功","index.php?m=admin&f=user&a=chakan");
        }else{
            $this->jump("删除成功","index.php?m=admin&f=user&a=chakan");
        }
    }
    function addCon(){
//        if($this->session->get("rid")!=1){
//            $this->jump("没有权限","index.php?m=admin&f=login.class.php&a=main");
//            exit;
//        }
        $db=new db("admin");
        $uname=$_POST["uname"];
        $upass=md5($_POST["upass"]);
        $result=$db->where("aname='{$uname}'")->select();
        if($uname==""){
            $this->jump("用户名不能为空","index.php?m=admin&f=user&a=add");
            exit;
        }
        if($upass==""){
            $this->jump("密码不能为空","index.php?m=admin&f=user&a=add");
            exit;
        }
        if(count($result)>0){
            $this->jump("用户名存在","index.php?m=admin&f=user&a=add");
            exit;
        }
        if($db->insert("aname='{$uname}',apass='{$upass}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=user&a=add");
        }
    }

}