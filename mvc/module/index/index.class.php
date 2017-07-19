<?php

class index extends indexMain
{
    function init()
    {
        $this->smarty->assign("login", $this->session->get("indexLogin"));
        $this->smarty->assign("mname", $this->session->get("mname"));

       /* $this->smarty->assign("uname", $this->session->get("uname"));
        $this->smarty->assign("jibie", $this->session->get("jibie"));
        $this->smarty->assign("umess", $this->session->get("umess"));
        $this->smarty->assign("uhome", $this->session->get("uhome"));
        $this->smarty->assign("ubirthday", $this->session->get("ubirthday"));*/
        
        if($uid=$this->session->get("uid")){
            $dbus=new db("user");
            $resultus = $dbus->where("uid=".$uid)->select();
            $this->smarty->assign("resultus", $resultus);
        }

        $db = new db("category");
        $result = $db->where("pid=0")->select();
        $this->smarty->assign("result", $result);
        $this->smarty->display("index.html");
    }

    function code()
    {
        $obj = new code();
        $obj->codeUrl = "demo.ttf";
        $obj->outPut();
        $this->session->set("code", $obj->current);
    }

    function fenlei()
    {
        $this->smarty->display("xiangqing.html");
    }

    function xiangqing()
    {
        $this->smarty->display("xiangqing.html");
    }

    function login(){
        $this->smarty->display("login.html");
    }
    function logins(){
        $this->session->get("indexLogin");
        if($login=$this->session->get("indexLogin")){
            $uid=$this->session->get("uid");

            $uname=$this->session->get("uname");
            $this->smarty->assign("userlogin",$login);
            $this->smarty->assign("uid",$uid);
            $this->smarty->assign("uname",$uname);
        }

        $this->smarty->display("logins.html");
    }
    function loginss(){
        $name=$_POST["name"];
        echo $name;
    }

    function register(){
        $this->smarty->display("register.html");
    }
}