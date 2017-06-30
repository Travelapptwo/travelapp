<?php
header("content-type:image/png;charset=utf-8");
$im=imagecreatetruecolor(120,120);
$color=imagecolorallocate($im,255,0,0);
$color1=imagecolorallocate($im,0,0,255);
//imagettftext($im,10,0,0,0,$color1,"/deom.ttf","adcdkmska");
imagefill($im,0,0,$color);
imagettftext($im,20,-20,20,50,$color1,"deom.ttf","你");
$color2=imagecolorallocate($im,0,255,255);
imagettftext($im,20,5,50,50,$color2,"deom.ttf","好");
for($i=0;$i<1000;$i++){
    $r=mt_rand(0,255);
    $g=mt_rand(0,255);
    $b=mt_rand(0,255);
    $color3=imagecolorallocate($im,$r,$g,$b);
    imagesetpixel($im,mt_rand(0,120),mt_rand(0,120),$color3);
}
imagepng($im,"");


//Lib  核心
//Module 模块  操作逻辑
//Static 静态
//Template 模板