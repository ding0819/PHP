<?php

    session_start();
    $Name=$_POST["sName"];
    echo "您的名字：".$Name."<br/>";
    $Gender=$_POST["sGender"];
    echo "性別：".$Gender."<br/>";
    $StudentID=$_POST["sStudentID"];
    echo "學號：".$StudentID."<br/>";
    $Class=$_POST["sClass"];
    echo "系所：".$Class."<br/>";
    $Grade=$_POST["sGrade"];
    echo "系級：".$Grade."<br/>";
    $Email=$_POST["sEmail"];
    echo "Email：".$Email."<br/>";
    if($_POST["sPhoneNumber"]!="")
    {
        $Phnumber=$_POST["sPhoneNumber"];
        echo "您的電話號碼：".$Phnumber."<br/>";
    }
    else
    {
        echo "[未輸入電話號碼]<br/>";
    }
    if($_POST["sDate"]!="")
    {
        $Date=$_POST["sDate"];
        echo "出生日期：".$Date."<br/>";
    }
    else
    {
        echo "[未輸入出生日期]<br/>";
    }
    $Participate=$_POST["sParticipate"];
    echo "有無意願參加：".$Participate."<br/>";
    $Headcount=$_POST["sHeadcount"];
    echo "參加人數：".$Headcount."<br/>"; 
    if($_POST["sHeadcount"]>="2")
    {
        if($_POST["sName1"]!="" && $_POST["sStudentID1"]!="" && $_POST["sEmail1"]!="")
        {
            $sName1=$_POST["sName1"];
            echo "朋友姓名：".$sName1."<br/>";
            $sStudentID1=$_POST["sStudentID1"];
            echo "朋友系級、學號：".$sStudentID1."<br/>";
            $sEmail1=$_POST["sEmail1"];
            echo "朋友學校信箱：".$sEmail1."<br/>";
        }
    }
    $Game=$_POST["sGame"];
    $i=count($Game);
    for($j=0;$j<$i;$j++)
    {
        if($j<$i-1)
        {
            echo $Game[$j]."、";
        }
        else
        {
            echo $Game[$j];
        }
    }
    echo "<br/>";
    $Percent=$_POST["sPercent"];
    echo "期待百分比：".$Percent."<br/>";
    if($_POST["sComment"]!="")
    {
        $Comment=$_POST["sComment"];
        echo "意見提供：<br/>【".$Comment."】<br/>";
    }
    else
    {
        echo "[未提供意見!!!]";
    }
    echo "<br/>確認以上資料無誤後請按";
    echo "<a href='HW05logout.php'>登出</a>";
?>
