<?php
class shop extends main{
    function add(){
        $db=new db("category");
        $re=$db->select();
        $this->smarty->assign("re",$re);

      $this->smarty->display("addfl.html");
    }
    function addfl(){
        $name=$_POST["name"];
        $pid=$_POST["pid"];
        $Ename=$_POST["Ename"];
        $xingji=$_POST["xingji"];
        $db=new db("category");
        $re=$db->insert("name='$name',pid='$pid',Ename='$Ename',xingji='$xingji'");
        if($re>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=shop&a=add'</script>";
        }
        echo "<script>alert('添加失败');location.href='index.php?m=admin&f=shop&a=add'</script>";

    }
    function lookfl(){
        $db=new db("category");
        $re=$db->select();
        $this->smarty->assign("re",$re);
//       e($re);
        $this->smarty->display("lookfl.html");
    }
    function del(){
        $id=$_GET["id"];
        $db=new db("category");
        $re=$db->where("id='$id'")->del();
        if($re>0){
            echo "<script>alert('删除成功');location.href='index.php?m=admin&f=shop&a=lookfl'</script>";
        }
        echo "<script>alert('删除失败');location.href='index.php?m=admin&f=shop&a=lookfl'</script>";

    }
    function addshop(){
        $db=new db("category");
        $re=$db->select();
        $this->smarty->assign("re",$re);
        $dbs=new db("position");
        $res=$dbs->select();
        $this->smarty->assign("res",$res);
        $this->smarty->display("addshop.html");
    }
    function lookshop(){
        $db=new db("lists");
        $re=$db->select();
        $this->smarty->assign("re",$re);
//       e($re);
        $this->smarty->display("lookshops.html");
    }
    function up(){
        $obj=new upload();
        $obj->move();
    }
    function zaddshop(){
        $title=$_POST["title"];
        $cid=$_POST["cid"];
        $posid=$_POST["posid"];
        $keyword=$_POST["keyword"];
        $alltime=$_POST["alltime"];
        $discount=$_POST["discount"];
        $price=$_POST["price"];
        $start=$_POST["start"];
        $end=$_POST["end"];
        $starttime=$_POST["starttime"];
        $traffic=$_POST["traffic"];
        $routedefall=$_POST["routedefall"];
        $imgurl=$_POST["imgurl"];
        $xingji=$_POST["xingji"];
        echo $routedefall;
        $db=new db("lists");
        $re=$db->insert("posid='$posid',title='$title',cid='$cid',keyword='$keyword',alltime='$alltime',discount='$discount',price='$price',start='$start',end='$end',starttime='$starttime',traffic='$traffic',routedetail='$routedefall',imgurl='$imgurl',xingji='$xingji'");
        if($re>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=shop&a=addshop'</script>";
        }
        echo "<script>alert('添加失败');location.href='index.php?m=admin&f=shop&a=addshop'</script>";
    }
    function xg(){
        $id=$_POST["id"];
        $zd=$_POST["zd"];
        $zhi=$_POST["zhi"];
        $db=new db("lists");

       $re=$db->where("id=".$id)->update($zd."='{$zhi}'");
        if($re>0) {
            echo 1;
            exit();
            }
        echo 2;
    }
    function xgfl(){
        $id=$_POST["id"];
        $zd=$_POST["zd"];
        $zhi=$_POST["zhi"];
        $db=new db("category");
        $re=$db->where("id=".$id)->update($zd."='{$zhi}'");
        if($re>0) {
            echo 1;
            exit();
        }
        echo $id,$zd,$zhi;
    }
    function delshop(){
       $id=$_GET["id"];
        $db=new db("lists");
       $re=$db->where("id='$id'")->del();
        if($re>0){
            echo "<script>alert('删除成功');location.href='index.php?m=admin&f=shop&a=lookshop'</script>";
        }
        echo "<script>alert('删除失败');location.href='index.php?m=admin&f=shop&a=lookshop'</script>";
    }


}