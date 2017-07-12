<?php

/**
 * Created by PhpStorm.
 * User: ms
 * Date: 2017/5/31
 * Time: 14:06
 */
class myself  extends indexMain
{
  function __construct(){
      parent::__construct();
  }

  function init(){
       $login=$this->session->get("indexLogin");
       $this->smarty->assign("login",$login);
       $user=$this->session->get('uid');
       $this->db=new db('user');
       $result=$this->db->where("uid={$user}")->select();
       $this->smarty->assign("result",$result);
       $this->smarty->display('myself.html');
  }

  function mymess(){
      $user=$this->session->get('uid');
      $this->db=new db('user');
      $result=$this->db->where("uid={$user}")->select();
      $this->smarty->assign("result",$result);
      $this->smarty->display('myselfmess.html');
  }

  function myhome(){
      $user=$this->session->get('uid');
      $this->db=new db('home');
      $result=$this->db->select("select home.*,user.unickname,user.upicture  from home INNER JOIN user WHERE home.uid=user.id and user.id=$user ORDER BY home.htime DESC limit 10");

      $this->db2=new db("click");
      $click=$this->db2->where("uid=$user")->select("hid");
      $click=array_map(function($arr){
          return $arr['hid'];
      },$click);
      $this->smarty->assign('check',$click);
      $this->smarty->assign('result',$result);
      $this->smarty->display('index/myhomemei.html');
  }

//  我的信息
//  我的家乡美
//  我的活动
//  我参加的活动
    function messchange(){
        $user=$this->session->get('uid');
        $type=G('type');
        $this->db=new db('user');
        $result=$this->db->where("uid={$user}")->select();
        $this->smarty->assign('result',$result);
        $this->smarty->assign('type',$type);
        $this->smarty->display('mymesschange.html');
    }


    function load(){
        $obj=new upload();
        $obj->move();
    }
//    function tu(){
//        $imgurl=$_POST("data");
////        $type=G("type");
//        $this->db=new db('user');
//        $result=$this->db->where("id=23")->update("'upicture'='{$imgurl}'");
//        if($result>0){
//            echo 1;
//        }else{
//            echo 0;
//        }
//    }

    function messchangecheck(){
        $user=$this->session->get('uid');
        $type=P('type');
        $value=P($type);
//        echo $type,$value;exit();
        $this->db=new db('user');
        $result=$this->db->where("uid={$user}")->update("$type='$value'");
        //echo $result;
        if($result>0){
            echo 1;
        }else{
            echo 0;
        }
    }

    function myselfjoin(){
        $user=$this->session->get('uid');
        $this->db=new db('act_list');
        $result=$this->db->select("select activity.aname,activity.adate,activity.id from act_list INNER join activity WHERE activity.id=act_list.aid and act_list.uid=$user ORDER by activity.adate DESC ");
        $this->smarty->assign("data",$result);
        $this->smarty->display('index/myselfput.html');
    }

    function myselfput(){
        $user=$this->session->get('uid');
        $this->db=new db('activity');
        $result=$this->db->where("uid={$user}")->order("activity.adate DESC")->select();
        $this->smarty->assign("data",$result);
        $this->smarty->display('index/myselfput.html');
    }


    function myfriend(){
        $user=$this->session->get('uid');
        $this->db=new db('friend');
        $result=$this->db->select("select user.* from friend INNER JOIN  user WHERE user.id=friend.f_id and friend.u_id=$user");
        $this->smarty->assign("data",$result);
        $this->smarty->display('index/myselffriend.html');
    }

    function myfriendmore(){
        $id=G("id");
        $this->db=new db('user');
        $result=$this->db->where("id=$id")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display('index/myselffriendmore.html');
    }
}