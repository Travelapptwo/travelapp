<?php
class role extends main{
    function add(){
        $this->smarty->display("addRole.html");
    }
    function addCon(){
        $db=new db("role");
        $rname=$_POST["rname"];
//        var_dump($rname);
//        exit();
        if($db->insert("rname='{$rname}'")>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=role&a=add'</script>";
        }
    }
}