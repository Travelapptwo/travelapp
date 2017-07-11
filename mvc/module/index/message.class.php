<?php

class message extends indexMain
{
    function init(){
        $lid=$_GET["lid"];
        
        $login=$this->session->get("indexLogin");
        
        $uid=$this->session->get("uid");
        
        $uname=$this->session->get("uname");
        $this->smarty->assign("userlogin",$login);
        $this->smarty->assign("uid",$uid);
        $this->smarty->assign("uname",$uname);
        $this->smarty->assign("lid",$lid);
        
        $this->smarty->display("writeMessage.html");
    }
    function add(){
        $db=new db("message");
        $uid = $_POST["uid"];
        $lid = $_POST["lid"];
        $con = $_POST["con"];
        $re=$db->insert("uid={$uid},lid={$lid},message='{$con}'");
        //$sql = "insert into message (mid,lid,message) VALUES ($mid,$lid,'{$con}')";
//        echo $re;
        if($re>0){
            echo "ok";
        }else{
            echo "error";
        };
    }
}

?>