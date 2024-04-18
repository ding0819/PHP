<html>
<head>
    <meta charset="utf-8">
</head>
<form action="check.php" method="post">

    請選擇您的角色：
    <select name="users[]"><br/>
    <option value="Chair" selected>Chair
    <option value="Reviewer">Reviewer
    <option value="Author">Author
    </select><br/>
    帳號：<input type="text" name="uID" value=""><br/>
    密碼：<input type="password" name="uPWD" value=""><br/>
    <input type="submit" value="提交">
</form>
</html>
