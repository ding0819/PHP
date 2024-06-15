<?php
    session_start();
?>
<meta charset="utf-8">
<?php

    $sID="NUKIM";
    $sPWD="nukim";

    $uID=$_POST["uID"];
    $uPWD=$_POST["uPWD"];

    if($uID==$sID && $uPWD==$sPWD)
    {
        $_SESSION["check"]="Yes";
        header("Location:HW04.php");
    }
    else
    {
        $_SESSION["check"]="No";
        header("Location:HW05fail.php");   
    }
?>
