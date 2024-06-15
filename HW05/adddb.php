<?php

    $sID=$_GET["sID"];
    $sName=$_GET["sName"];
    $sDept=$_GET["sDept"];
    $sEmail=$_GET["sEmail"];

    //連接資料庫
    $link = @mysqli_connect(
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'im_party');  // 預設使用的資料庫名稱
    
    //SQL語法
    $SQL="INSERT INTO party(No,Name,Department,Email) VALUES('$sID','$sName','$sDept','$sEmail')";

    //送出查詢
    if($result = mysqli_query($link, $SQL))
    {
        echo "<br/>新增成功";
    }
    echo "<br/><a href='show.php'>查看資料庫</a>";


?>
