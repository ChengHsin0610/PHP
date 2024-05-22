<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Database configuration
$servername = "localhost";
$username = "root";
$password = "142599";
$dbname = "email";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch email addresses from database
$sql = "SELECT Email FROM email2";
$result = $conn->query($sql);

$to = $_POST["to"];
$subject = $_POST["subject"];
$content = $_POST["content"];
$content = nl2br($content);
$content .= "<br>";
$content .= "<img src='https://www.nuk.edu.tw/var/file/0/1000/img/147/logo.png'>";

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = false; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'angela93610@gmail.com'; // SMTP username
    $mail->Password = 'bshn dvws pgvj abkz'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
    $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'utf-8';

    // Recipients
    $mail->setFrom('angela93610@gmail.com', 'Mailer');
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mail->addAddress($row['Email']);
        }
    }
    $mail->addReplyTo('angela93610@gmail.com', 'Information');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $content;

    $mail->send();
    echo '傳了!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

$conn->close();
?>
