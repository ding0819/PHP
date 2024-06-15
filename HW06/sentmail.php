<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

//接收mail.php傳過來的變數
$subject = $_POST["subject"];
$content = $_POST["content"]; 
$content = nl2br($content);

//連接資料庫
$db = @mysqli_connect('localhost', 'root', '', 'mail');

if(!$db) {
    die("資料庫開啟失敗");
}

//資料表-SQL 
$sql = "SELECT * FROM mail";

//取得SQL資料
$result = mysqli_query($db, $sql);

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1113353@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = 'kevw bvng zetn pjic';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet    = 'UTF-8'; //S大寫


    //Recipients
    $mail->setFrom('a1113353@mail.nuk.edu.tw', 'Mailer');
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('a1113353@mail.nuk.edu.tw', 'Information'); //收信人回覆時的email
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    while($row = mysqli_fetch_assoc($result)) {
        $email = $row["Email"];
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->addAddress($email, 'Recipient');
        $mail->Subject = $subject;     
        $mail->Body    = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        $mail->clearAddresses();
    }

    //釋放$result的記憶體空間
    mysqli_free_result($result);

    //關閉資料庫連接
    mysqli_close($db);

    echo "Message has been sent<br>";
    echo "<a href='index.php'>回首頁</a>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
