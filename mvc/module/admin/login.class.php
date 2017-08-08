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
        $code=$_POST["code"];
        if(!($code==$this->session->get("code"))){
            $this->jump("验证码错误", "index.php?m=admin&f=login");
            exit();
        }
        $result = new db("admin");
        $r=$result->select();
        $mname=isset($_POST["username"])?$_POST["username"]:"";
        $mpass=isset($_POST["userpass"])?$_POST["userpass"]:"";
        $pass=md5($mpass);

//        $code=strtolower($code);
////        var_dump($this->session->get("code"));
////        exit();
//
        foreach ($r as $v) {
            if ($v["aname"] == $mname) {
                if ($v["apass"] == $pass) {
                    $this->session->set("login","yes");
                    $this->session->set("logined","yes");
                    $this->session->set("name",$mname);
                    $this->session->set("uname",$v["aname"]);
//                    $this->session->set("rid",$v["aid"]);
                    echo "<script>alert('登陆成功');location.href='index.php?m=admin&f=login&a=main'</script>";
                    exit();
                }
            }
        }
        echo "<script>alert('登陆失败');location.href='index.php?m=admin&f=login'</script>";
        exit();
    }

    function main(){
        if (!($this->session->get("login"))) {
            $this->jump("未登录", "index.php?m=admin&f=login");
            exit();
        }
        $this->smarty->assign("name",$_SESSION["name"]);

        $this->smarty->display("main.html");
    }
    function logout(){
        $this->session->clear();
        echo "<script>alert('退出成功');location.href='index.php?m=admin&f=login'</script>";
    }

}
