<?php
    session_start();
?>
<html>
<meta charset="utf-8">

<?php
    
    $rOpinion=$_POST["rOpinion"];
    echo "論文評審決定：".$rOpinion."<br/>";
    if($_POST["rComment"]!="")
    {
        $rComment=$_POST["rComment"];
        echo "論文評論提供：<br/>【".$rComment."】<br/>";
    }
    else
    {
        echo "[未提供論文評論!!!]";
    }

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
