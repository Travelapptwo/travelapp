<?php

class login extends indexMain
{
    function init(){
        $login=$this->session->get("indexLogin");

        $uid=$this->session->get("uid");

        $uname=$this->session->get("uname");
        $this->smarty->assign("userlogin",$login);
        $this->smarty->assign("uid",$uid);
        $this->smarty->assign("uname",$uname);
        $this->smarty->display("login.html");
    }
    function __construct()
    {
        parent::__construct();
        $this->db = new db("user");
    }


    function loginUname()
    {
        $uname = $_POST["uname"];
        $result = $this->db->select();
        foreach ($result as $v) {
            if ($v["uname"] == $uname) {
                $this->session->set("uname", $v["uname"]);
                echo "ok";
                exit();
            }
        }
    }

    function loginUpass()
    {
        $upass = $_POST["upass"];
        $result = $this->db->select();
        foreach ($result as $v) {
            if ($v["upass"] == md5($upass)) {
                $this->session->set("indexLogin", "yes");
                $this->session->set("upass", $v["upass"]);
                $this->session->set("uid", $v["uid"]);
                echo "ok";
                exit();
            }
        }
    }
    function logout(){
        $this->session->clear();
        echo "ok";
    }
    function register()
    {
        $uname = $_POST["uname"];

        if (empty($uname)) {
            echo "用户不能为空";
            exit;
        }
        $result = $this->db->where("uname='{$uname}'")->select();
        if (count($result) > 0) {
            echo "用户名已存在";
            exit;
        }
        $uphonenum = $_POST["uphonenum"];
        if (empty($uphonenum)) {
            echo "电话不能为空";
            exit;
        }
        if ($uphonenum == "error") {
            echo "请输入正确的手机号";
            exit;
        }
        $upass = $_POST["upass"];
        if (empty($upass)) {
            echo "密码不能为空";
            exit;
        }

        $upass2 = $_POST["upass2"];
        if (empty($upass2)) {
            echo "确认密码不能为空";
            exit;
        }

        if ($upass != $upass2) {
            echo "两次密码不一致";
            exit;
        }

        $upass = md5($upass);

        if ($this->db->insert("uname='{$uname}',upass='{$upass}',uphonenum={$uphonenum}")) {
            echo "注册成功";
            exit;
        }
    }
}