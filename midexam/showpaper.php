<?php
    session_start();
?>
<html>
<meta charset="utf-8">

<?php
    
    $aTitle=$_POST["aTitle"];
    echo "論文標題：".$aTitle."<br/>";
    $aName=$_POST["aName"];
    echo "作者姓名：".$aName."<br/>";
    $aEmail=$_POST["aEmail"];
    echo "作者Email：".$aEmail."<br/>";
    if($_POST["aComment"]!="")
    {
        $aComment=$_POST["aComment"];
        echo "論文摘要：<br/>【".$aComment."】<br/>";
    }
    else
    {
        echo "[未提供論文摘要]";
    }

    if($_SESSION["check3"]=="Yes")
    {
        echo "<a href='logout.php'>登出</a>";
    }
    else
    {
        header("Location:index.php");
    }
?>
</html>
