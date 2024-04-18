<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
    <h1><center>Reviewer您好，歡迎進入論文評論網頁</center></h1>
<form action="showreview.php" method="post">
    論文評審決定：
        <input type="radio" name="rOpinion" value="Accept">Accept
        <input type="radio" name="rOpinion" value="Minor Revision">Minor Revision
        <input type="radio" name="rOpinion" value="Major Revision">Major Revision
        <input type="radio" name="rOpinion" value="Reject"><br/>Reject
    論文評論評語：<br/>
        <textarea name="rComment" value="" rows="10">
        </textarea><br/>
        <input type="submit" value="提交">
        <input type="reset" value="清除">
</form>
<?php
    if($_SESSION["check2"]=="Yes")
    {
        echo "<a href='logout.php'>登出</a>";
    }
    else
    {
        header("Location:index.php");
    }
?>
</html>
