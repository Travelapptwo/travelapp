<?php
if(!defined("COMING")){
    echo "非法侵入";
    exit();
}

class db{
    //1.地址  2.用户  密码 3.库名
    private $host;//地址
    private $user;//yonghu
    private $pass;//mima
    private $port;//duankou
    private $database;//shujuku  ming
    public $db;

    function __construct($table){
        $this->table=$table;
        $config=include APP_PATH."/config.php";
        $this->host=$config["database"]["host"];
        $this->user=$config["database"]["user"];
        $this->pass=$config["database"]["pass"];
        $this->database=$config["database"]["database"];
        $this->port=$config["database"]["port"];

        $this->db=mysqli_connect($this->host,$this->user,$this->pass,$this->database,$this->port);
        if(!$this->db){
            echo mysqli_connect_error();
            exit();
        }
        $this->db->query("set names utf8");

        $this->opts["field"]="*";
        $this->opts["where"]="";
        $this->opts["order"]="";
        $this->opts["limit"]="";
        $this->opts["val"]="";
    }
    function select($sql=""){
        if(empty($sql)) {
        $sql="select ".$this->opts["field"]." from ".$this->table." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
        }else{
            $sql=$sql;
        }
        $result=$this->db->query($sql);
        $array=array();
        while ($row=mysqli_fetch_assoc($result)){
            $array[]=$row;
        }
        mysqli_free_result($result);
        return $array;
//        echo $sql;

    }
    function setField($params="*"){
        $this->opts["field"]=$params;
        return $this;
    }
    function where($params){
        $this->opts["where"]="WHERE ".$params;
        return $this;
    }
    function order($params){
        $this->opts["order"]="ORDER BY ".$params;
        return $this;
    }
    function limit($params){
        $this->opts["limit"]="LIMIT ".$params;
        return $this;
    }
    function setval($params){
        $this->opts["val"]=$params;
        return $this;
    }
    function del($params=""){

        $this->optd["where"]=!empty($params)?" WHERE ".$params:$this->opts["where"];
        $sql="delete from ".$this->table." ".$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function update($params=""){

            if(!empty($params)){
                $params=strtolower($params);
                $index=strrpos("where",$params);
                if($index>-1){
                    if($index=0){
                        $this->opts["field"]= $this->opts["field"];
                    }else{
                        $this->opts["field"]=substr($params,0,$index);
                    }
                    $this->opts["where"]=substr($params,$index);
                }else{
                    $this->opts["field"]=$params;
                    $this->opts["where"]=$this->opts["where"];
                }
            }
        $sql="update ".$this->table." set ".$this->opts["field"]." ".$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function insert($params=""){
        if(!empty($params)){
            $arr=explode(",",$params);
            $keys="";
            $val="";
            foreach ($arr as $v){
                $arr1=explode("=",$v);

                $keys.=$arr1[0].",";
                $val.=$arr1[1].",";
            }
            $this->opts["field"]=substr($keys,0,-1);
            $this->opts["val"]=substr($val,0,-1);
        }
        $sql="insert into ".$this->table." (".$this->opts["field"].") values (".$this->opts["val"].")";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function join($table){
        $sql="select ".$this->opts["f"]." from ".$table." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
        $result=$this->db->query($sql);
        $array=array();
        while ($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        return $array;
    }
}