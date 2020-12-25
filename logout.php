<?php

    error_reporting(0); //錯誤報告顯示
    session_start();
    //將session清空
    //session_destroy(); 將伺服器上所有的session variable清空
    unset($_SESSION["id"]);
    echo "登出中......"; //顯示登出中......
    echo "<meta http-equiv=REFRESH CONTENT='2;url=login.html'>";//並在2秒後跳轉到login.html

?>