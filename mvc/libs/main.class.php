<?php
class main{
    function __construct()
    {
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");
        $smarty->setTemplateDir("template/admin");
        $this->smarty=$smarty;
        $this->session=new session();
    }
    function jump($Con,$url){
        echo "<script>alert('$Con');location.href='$url';</script>";
    }
}