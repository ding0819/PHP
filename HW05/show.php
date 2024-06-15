<?php

// 連接 MySQL 資料庫
$link = mysqli_connect(
    'localhost',    // MySQL 主機名稱
    'root',         // 使用者名稱
    '',             // 密碼
    'im_party');      // 預設使用的資料庫名稱

// 檢查連接是否成功
if (!$link) {
    die("無法開啟資料庫！<br/>" . mysqli_connect_error());
} else {
    echo "資料庫開啟成功！<br/>";
}

// 執行 SQL 語法以選擇所有學生
$SQL = "SELECT * FROM party";
$result = mysqli_query($link, $SQL);

// 顯示學生資料表格
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["No"] . "</td>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["Department"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td><a href='del.php?No=" . $row["No"] . "'>刪除</a></td>";
    echo "<td><a href='update.php?No=" . $row["No"] . "'>修改</a></td>";
    echo "</tr>";
}
echo "</table>";

// 關閉資料庫連接
mysqli_close($link);

?>
