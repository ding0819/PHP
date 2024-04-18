<?php
    session_start();
?>
<html>
    <meta charset="utf-8">

<?php
     
    if($_SESSION["check1"]=="Yes")
    {
        echo "歡迎進入網頁<br/>";
        echo "帳號：chair" . "<br>" . "密碼：123" . "<br>" . "<br>";
        echo "<a href='logout.php'>登出</a>";
    }
    else
    {
        header("Location:index.php");
    }
?>
</html>
