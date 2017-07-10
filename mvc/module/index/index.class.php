<?php

class index extends indexMain {
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->display("index.html");
    }
    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
//        $obj->width=130;
//        $obj->height=30;
        $obj->outPut();
        $this->session->set("code",$obj->current);
    }
    function fenlei(){
        $this->smarty->display("xiangqing.html");
    }
    function xiangqing(){
        $this->smarty->display("xiangqing.html");
    }
}