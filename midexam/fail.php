<html>
    <meta charset="utf-8">
<?php
    echo "登入系統失敗<br/>";
    echo "帳號或密碼有誤<br/>";
    echo "2秒後重回登入頁面";
    header("Refresh:2;url=index.php");
?>
</html>
