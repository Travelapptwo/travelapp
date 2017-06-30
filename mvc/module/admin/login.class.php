<?php
class login extends main{
    function init(){
//        $num=mt_rand();
//        $this->session->set("postion",postion);
//        $this->smarty->assign();
        $this->smarty->display("index.html");
    }
    function code(){

        $obj=new code();
        $obj->codeUrl="deom.ttf";
        $obj->outPut();
        $this->session->set("code",$obj->current);
    }
    function check(){
        $result = new db("user");
        $r=$result->select();
        $mname=isset($_POST["username"])?$_POST["username"]:"";
        $mpass=isset($_POST["userpass"])?$_POST["userpass"]:"";
        $pass=md5($mpass);
        $code=$_POST["code"];
        $code=strtolower($code);
//        var_dump($this->session->get("code"));
//        exit();
        if(!($code==$this->session->get("code"))){
            echo "<script>alert('验证码错误');location.href=login.class.php</script>";
        }
        foreach ($r as $v) {
            if ($v["uname"] == $mname) {
                if ($v["upass"] == $pass) {
                    $this->session->set("login","yes");
                    $this->session->set("logined","yes");
                    $this->session->set("uname","uname");
                    $this->session->set("nichen",$v["nichen"]);
                    $this->session->set("rid",$v["rid"]);
                    echo "<script>alert('登陆成功');location.href='index.php?m=admin&f=login&a=main'</script>";
                }
            }
            echo "<script>alert('登陆失败')</script>";
        }
    }

    function main(){
        if (!($this->session->get("login"))) {
            $this->jump("未登录", "index.php?m=admin&f=login");
        }
        $this->smarty->display("main.html");
    }
    function logout(){
        $this->session->clear("login");
        $this->jump();
    }

}
