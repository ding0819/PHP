<meta charset='utf8'>

<?php
    echo "檔案名稱: " . $_FILES["myFile"]["name"] . "<br>";
    echo "檔案檔名: " . $_FILES["myFile"]["tmp_name"] . "<br>";
    echo "檔案尺寸: " . $_FILES["myFile"]["size"] . "<br>";
    echo "檔案種類: " . $_FILES["myFile"]["type"] . "<br>";

    echo $ext = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);

    $upname = time(). "." . $ext;

    $upname = "pic\\".$upname;
    echo $upname;

    if(copy($_FILES["myFile"]["tmp_name"], $upname)) {
        echo "檔案上傳成功";
        unlink($_FILES["myFile"]["tmp_name"]);
    }

    echo "<br><a href='upload.php'>回上一頁</a><br>";
    echo "<a href='HW05login.php'>回首頁</a>";
?>
