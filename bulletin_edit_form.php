<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","mydb");//連接至資料庫
$sql="select * from bulletin where bid={$_GET[bid]}"; 
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

echo "
<h1>修改佈告</h1>
<form method=post action=bulletin_edit.php>
    <input type=hidden name=bid value={$row[bid]}>
    佈告標題：<input type=text name=title size=200 value={$row[title]}><p>
    佈告內容：<p><textarea cols=100 rows=20 name=content>{$row[content]}</textarea><p>
    佈告類型：
    <input type=radio name=type value=1"; //設定修改佈告內容的表格大小及格式
if($row[type]=="1") echo" checked"; //如果類型是1 在系上公告標示
echo">系上公告
    <input type=radio name=type value=2";//如果類型是2 在招生訊息標示
if($row[type]=="2") echo" checked";
echo">招生訊息
    <input type=radio name=type value=3";//如果類型是3 在企業徵才標示
if($row[type]=="3") echo" checked";
echo">企業徵才
    <p>
    發佈時間：<input type=date name=time value={$row[time]}><p>
    <input type=submit value=發佈公告>
</form>
";
?>