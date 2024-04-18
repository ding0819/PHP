<?php
    session_start();
?>
<html>
    <meta charset="utf-8">
</head>
    <h1><center>Author您好，歡迎進入論文投稿網頁</center></h1>
<form action="showpaper.php" method="post">
    論文標題：
        <input type="text" name="aTitle" value="" ><br/>
    作者姓名：
        <input type="text" name="aName" value=""><br/>
    作者Email：
    <input type="email" name="aEmail"><br/>
    論文摘要：<br/>
        <textarea name="aComment" value="" rows="10">
        </textarea><br/>
        <input type="submit" value="提交">
        <input type="reset" value="清除">
</form>
<?php
    if($_SESSION["check3"]=="Yes")
    {
        echo "<a href='logout.php'>登出</a>";
    }
    else
    {
        header("Location:error.php");
    }
?>
</html>
