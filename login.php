  
<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb"); //連接之資料庫
    if (mysqli_connect_error($conn)) //如果資料庫連接錯誤 顯示資料庫連線錯誤
        die("資料庫連線錯誤"); 

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user"); //從資料庫中選擇mydb的user
    
    $login=FALSE;
    while ($row=mysqli_fetch_array($result)) {
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) 
        $login=TRUE;
    } //輸入之帳號密碼 == 資料庫內user的帳號密碼 則登入成功
    
    /*if  (!$_POST["id"] || !$_POST["pwd"]){
           echo "請輸入帳號/密碼"; 
           echo "<meta http-equiv='refresh' content='3;url=login.html''>";              
    }*/
    if ($login==TRUE){
      //echo "歡迎登入";   
      session_start();
      $_SESSION["id"] = $_POST["id"];
      echo "<meta http-equiv='refresh' content='0;url=bulletin.php'>"; //如果登入成功 0秒後跳轉到bulletin.php
    }
    else{
      echo "帳號或密碼錯誤"; //登入失敗顯示帳號或密碼錯誤
      echo "<meta http-equiv='refresh' content='3;url=login.html'>";//並在3秒後跳轉到login.html    
    }
?>