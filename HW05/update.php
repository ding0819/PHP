<meta charset='utf8'>

<?php
    $No=$_GET["No"];

    //連接資料庫
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'im_party');  // 預設使用的資料庫名稱
    
    //SQL語法
    $SQL="SELECT * FROM party WHERE No='$No'";
    if($result = mysqli_query($link,$SQL))
    {
        $row=mysqli_fetch_assoc($result);
        $Name=$row["Name"];
        $Department=$row["Department"];
        $Email=$row["Email"];
    }
?>

<form action="updatecheck.php" method="post">

    學號：<?php echo $No ?><input type="hidden" name="sNo" value="<?php echo $No ?>"><br/>
    姓名：<input type="text" name="sName"><br/>
    系所：<input type="text" name="sDept"><br/>
    Email:<input type="email" name="sEmail"><br/>
    <input type="submit">

</form>
