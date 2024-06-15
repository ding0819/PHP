<?php
    session_start();
    if($_SESSION["check"]=="No")
    {
        echo "非法進入網頁<br/>";
        echo "將再3秒後重回登入頁面";
        header("Location:HW05error.php");
    }
?>
<html>
<head>
    <meta charest="utf-8">
    <title>資管晚會報名表</title>
</head>
    <h1><center>資管晚會意願調查</center></h1>
<form action="Reply04.php" method="post">
    姓名：
    <input type="text" name="sName" value="" placeholder="輸入您的姓名" required><br/>
    性別：
    <input type="radio" name="sGender" value="male">男
    <input type="radio" name="sGender" value="female">女<br/>
    學號：
    <input type="text" name="sStudentID" value="" placeholder="輸入您的學號(Axxxxxxx)" required><br/>
    系所：
    <input type="radio" name="sClass" value="資管系">資管系
    <input type="radio" name="sClass" value="應經系">應經系
    <input type="radio" name="sClass" value="亞太系">亞太系
    <input type="radio" name="sClass" value="金管系">金管系<br/>
    系級：
    <input type="radio" name="sGrade" value="116">116級
    <input type="radio" name="sGrade" value="115">115級
    <input type="radio" name="sGrade" value="114">114級
    <input type="radio" name="sGrade" value="113">113級<br/>
    學校信箱：
    <input type="email" name="sEmail" placeholder="axxxxxxx@mail.nuk.edu.tw" required><br/>
    電話號碼：
    <input type="text" name="sPhoneNumber" value="" placeholder="輸入您的電話號碼" required><br/>
    出生日期：
    <input type="date" name="sDate" value=""><br/>
    是否有意願參加(必填)；
    <input type="radio" name="sParticipate" value="是">是
    <input type="radio" name="sParticipate" value="否">否<br/>
    請輸入參加人數(若無意願參與，請選0)：<br/>
    <input type="number" name="sHeadcount" required><br/>
    朋友姓名：<br/>
    <input type="text" name="sName1" value="" placeholder="輸入朋友姓名"><br/>
    朋友系級、學號：<br/>
    <input type="text" name="sStudentID1" value="" placeholder="輸入朋友系級、學號(xx系、Axxxxxxx)"><br/>
    朋友學校信箱：<br/>
    <input type="email" name="sEmail1" placeholder="axxxxxxx@mail.nuk.edu.tw"><br/>
    欲想參加活動(可複選)：<br/>
    <select name="sGame[]" multiple>
    <option value="酒精路跑" selected>誰酒量最好
    <option value="電競大賽">拜託教我打遊戲
    <option value="桌遊">快點來動腦
    <option value="制服趴">重溫青春
    <option value="皆無興趣">我都還好 想點其他的
    </select><br/>
    期待百分比(若不參加，不需填寫)：<br/>
    <input type="range" name="sPercent"><br/>
    意見回饋：<br/>
    <textarea name="sComment" value="" rows="10">
    </textarea><br/>
    <input type="submit" value="送出">
    <input type="reset" value="清除">
</form>
</html>
