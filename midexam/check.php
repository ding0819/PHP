<?php
    session_start();
?>
<meta charset="utf-8">
<?php
    $cID="chair";
    $cPWD="123";
    $user1="Chair";
    $rID="reviewer";
    $rPWD="234";
    $user2="Reviewer";
    $aID="author";
    $aPWD="345";
    $user3="Author";

    $uID=$_POST["uID"];
    $uPWD=$_POST["uPWD"];
    $users=$_POST["users"];

    
    $i=count($users);
    for($j=0;$j<$i;$j++)
    {
        if($uID==$cID && $uPWD==$cPWD && $users[$j]==$user1)
        {
            $_SESSION["check1"]="Yes";
            $_SESSION["check2"]="No";
            $_SESSION["check3"]="No";
            setcookie("user1",$user1);
            setcookie("cID",$cID);
            setcookie("cPWD",$cPWD);
            header("Location:chair.php");
        }
        else if($uID==$rID && $uPWD==$rPWD && $users[$j]==$user2)
        {
            $_SESSION["check1"]="No";
            $_SESSION["check2"]="Yes";
            $_SESSION["check3"]="No";
            setcookie("user2",$user2);
            setcookie("rID",$rID);
            setcookie("rPWD",$rPWD);
            header("Location:reviewer.php");
        }
        else if($uID==$aID && $uPWD==$aPWD && $users[$j]==$user3)
        {
            $_SESSION["check1"]="No";
            $_SESSION["check2"]="No";
            $_SESSION["check3"]="Yes";
            setcookie("user3",$user3);
            setcookie("aID",$aID);
            setcookie("aPWD",$aPWD);
            header("Location:author.php");
        }
        else
        {
            $_SESSION["check1"]="No";
            $_SESSION["check2"]="No";
            $_SESSION["check3"]="No";
            header("Location:fail.php");
        }
    }
    

?>
