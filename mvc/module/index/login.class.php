<?php

class login extends indexMain
{

    function __construct()
    {
        parent::__construct();
        $this->db = new db("user");
        $this->uname = "";
    }


    function loginUname()
    {
        $uname = $_POST["uname"];
        if (empty($uname)) {
            echo "用户名不能为空";
            exit;
        }
        $result = $this->db->select();
        foreach ($result as $v) {
            if ($v["uname"] == $uname) {
                $this->session->set("uname", $v["uname"]);
                $this->session->set("uid", $v["uid"]);
                $this->uname = $uname;
                echo "unameok";
                exit();
            }
        }

    }

    function loginUpass()
    {
        $upass = $_POST["upass"];
        $uname = $_POST["uname"];
        if (empty($upass)) {
            echo "密码不能为空";
            exit;
        }
        $result = $this->db->where("uname='{$uname}'")->select();
        /*var_dump($result);
        exit();*/
        $result = $result[0];
        if ($result['upass'] == md5($upass)) {
            $this->session->set("indexLogin", "yes");
            $this->session->set("upass", $result['upass']);
           /* $this->session->set("jibie", $result['jibie']);
            $this->session->set("umess", $result['umess']);
            $this->session->set("uhome", $result['uhome']);
            $this->session->set("ubirthday", $result['ubirthday']);*/
            echo "ok";
            exit();
        } else {
            echo "密码错误";
            exit();
        }
    }


    function logout()
    {
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
