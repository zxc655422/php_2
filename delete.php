<?php
    error_reporting();
    $conn=mysqli_connect("localhost","root","","mydb"); //連接之資料庫
    // delete from bulletin where bid=???
    $sql="delete from bulletin where bid={$_GET[bid]}"; //從bulletin刪除
    //echo $sql;
    if(!mysqli_query($conn,$sql)) //判斷是否刪除成功
        echo "刪除錯誤"; //如果失敗 顯示刪除錯誤
    else{
        echo "刪除成功;回前頁中..."; //如果成功 顯示刪除成功;回前頁中...
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>"; //並在3秒後回到 bulletin.php
    }




?>