<?php
//用来对字符串来进行匹配、拆分、组合、检索
//php写自己的编程语言
class Smarty{
    public  $compileDir="compile";
    public  $templateDir="template";

    function setCompileDir($dir){
        $this->compileDir=$dir;
        if(!is_dir($this->compileDir)){
            mkdir($this->compileDir);
        }
    }
    function setTemplateDir($dir){
        $this->templateDir=$dir;
        if(!is_dir($this->templateDir)){
            mkdir($this->templateDir);
        }
    }
    function assign($attr,$val){
        $this->arr[$attr]=$val;
    }
    function display($file){
        $url=$this->templateDir."/".$file;
        $con=file_get_contents($url);
        $str=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"] ?>',$con);
        $compilefile=$this->compileDir."/index.php";
        file_put_contents($compilefile,$str);
        include $compilefile;
    }
}