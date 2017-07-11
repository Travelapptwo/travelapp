<?php
class code{
    public $code="abcdefgABCDEF";
    public $codeLen=4;
    public $codeUrl="../demo.ttf";
    public $width=200;
    public $type="png";
    public $height=40;
    public $current="";
    private $image;
    public $size=array("min"=>20,"max"=>30);
    public $angle=array("min"=>-15,"max"=>15);
    public $lineNum=10;
    public $pointNum=100;

    function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->getColor());
//        imagedestroy($this->image);
    }

    function createCon(){
        $this->getText();
        for($i=0;$i<$this->codeLen;$i++){
            $size=mt_rand($this->size["min"],$this->size["max"]);
            $angle=mt_rand($this->angle["min"],$this->angle["max"]);
//            $x=$this->width/$this->codeLen;
            $x=$i*($this->width/$this->codeLen)+mt_rand(-10,10);
            $x=($x<0)?0:$x;
            if($i==0){
                $x=$x?0:$x;
            }
            $height=imagettfbbox($size,$angle,$this->codeUrl,$this->current[$i]);
            $y=mt_rand($height[1]-$height[5],$this->height);
//            $box=imageftbbox($size,$angle,$this->codeUrl,$this->current[$i]);
//            $y=$box[1]-$box[5]+mt_rand(-10,20);
            imagettftext($this->image,$size,$angle,$x,$y,$this->getColor("asdf"),$this->codeUrl,$this->current[$i]);
        }
    }


    function getText(){
        $str="";
        for($i=0;$i<$this->codeLen;$i++){
            $lenth=strlen($this->code)-1;
            $num=mt_rand(0,$lenth);
            $str.=$this->code[$num];
        }
        $this->current=$str;
        return $str;
    }


    function getColor($type="back"){
        $r=($type=="back")?mt_rand(0,120):mt_rand(120,255);
        $g=($type=="back")?mt_rand(0,120):mt_rand(120,255);
        $b=($type=="back")?mt_rand(0,120):mt_rand(120,255);
        return imagecolorallocate($this->image,$r,$g,$b);
    }

//创建干扰线
    function createLine(){
        for($i=0;$i<$this->lineNum;$i++){
            imageline($this->image,mt_rand(0,$this->width/2),mt_rand(0,$this->height),mt_rand($this->width/2,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }
//创建干扰点
    function createpix(){
        for($i=0;$i<$this->pointNum;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }

    function outPut(){
        header("content-type:image/".$this->type);
        $this->createCanvas();
        $this->createCon();
        $this->createLine();
        $this->createpix();
        $type="image".$this->type;
        $type($this->image);
        $this->current=strtolower($this->current);
        imagedestroy($this->image);
    }
}

//$obj=new code();
//$obj->codeUrl="../deom.ttf";
//$obj->outPut();