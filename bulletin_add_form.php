<?php
echo "
<h1>新增佈告</h1>
<form method=post action=bulletin_add.php>
佈告標題：<input type=next name=title size=200><p>
佈告內容：<p><textarea cols=100 rows=20 name=content></textarea><p>
佈告類型：<input type=radio name=type value=1 checked>系上公告
<input type=radio name=type value=2>招生訊息
<input type=radio name=type value=3>企業徵才
<p>
發佈時間：<input type=date name=time><p>
<input type=submit value=發佈公告>
</form>
"//新增佈告之表格大小及格式
?>