<?php
$user_name =  htmlspecialchars($_POST["username"]);
$user_phone =  htmlspecialchars($_POST["userphone"]);

$token = "6380330406:AAGGatvxXQky8nPxtKx-aJitvfLd9fU00Ng";
$chat_id = "-929818355";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}