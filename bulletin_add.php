<?php
error_reporting(0);
session_start();
if(!isset($_SESSION[id])){ //判斷是否登入系統
    echo "請輸入帳號密碼";  //顯示請輸入帳號密碼
    echo "<meta http-equiv='refresh' content='3;url=login.html''>";//並在3秒後跳轉至login.html
}else{
    $conn=mysqli_connect("localhost","root","","mydb"); //連接至資料庫
    $sql="insert into bulletin(title, content, type, time) values('{$_POST[title]}',
    '{$_POST[content]}',{$_POST[type]},'{$_POST[time]}')";
    //echo $sql;
    if(!mysqli_query($conn, $sql)) //判斷新增佈告是否成功
    echo "新增佈告錯誤";
    else
    echo "新增佈告成功";

    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>"; //並在3秒後挑轉至bulletin.php
}
?>