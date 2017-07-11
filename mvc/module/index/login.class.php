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
                $this->session->set("indexLogin", "yes");
                $this->session->set("uname", $v["uname"]);
                $this->session->set("uid", $v["uid"]);
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

}