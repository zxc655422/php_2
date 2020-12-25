<?php

error_reporting();//錯誤報告顯示
session_start();//將session清空
if(!isset($_SESSION["counter"]))
{
    $_SESSION["counter"]=1;
}
else
{
    $_SESSION["counter"]++;
}

echo "登入{$_SESSION["counter"]}人次"; //顯示登入人數

?>