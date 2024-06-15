<?php

    $No=$_GET['No'];
    //連接資料庫
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'im_party');  // 預設使用的資料庫名稱
    
    //SQL語法
    $SQL="DELETE FROM party WHERE No='$No'";
    //送出查詢
    if($result = mysqli_query($link,$SQL))
    {
        echo "<br/>刪除成功";
    }
    echo "<br/><a href='show.php'>查看資料庫資料</a>";

?>
