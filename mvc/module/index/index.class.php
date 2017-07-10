<?php

class index extends indexMain
{
    function init()
    {
        $this->smarty->assign("login", $this->session->get("indexLogin"));
        $this->smarty->assign("mname", $this->session->get("mname"));

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

    function sy_select()
    {

    }
}