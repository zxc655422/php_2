<?php
error_reporting(0);
session_start();
if(!isset($_SESSION[id])){ //判斷是否登入系統
    echo "請輸入帳號密碼"; //顯示請輸入帳號密碼
    echo "<meta http-equiv='refresh' content='3;url=login.html''>"; //並在3秒後跳轉至login.html
}else{
    $conn=mysqli_connect("localhost","root","","mydb");//連接之資料庫
    $sql="update bulletin set title='{$_POST[title]}', content='{$_POST[content]}' //從資料庫內擷取資料內容
         , type={$_POST[type]}, time='{$_POST[time]}' where bid={$_POST[bid]}";
    //echo $sql;
    if(!mysqli_query($conn, $sql))//判斷修改佈告是否成功
    echo "修改佈告錯誤"; //顯示修改佈告錯誤
    else
    echo "修改佈告成功"; //顯示修改佈告成功

    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>";//並在3秒後跳轉至bulletin.php
}
?>

