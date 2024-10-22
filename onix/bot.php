<?php

# -------------- Display Error -------------- #

error_reporting(E_ALL);
ini_set('display_errors', 1);

# -------------- Get Update From Telegram -------------- #

$update = json_decode(file_get_contents("php://input"));

# -------------- Include Essential Module -------------- #

require 'config/config.php';
require 'utils/methods.php';
require 'utils/variables.php';
require 'utils/keyboards.php';

# -------------- Create Objects -------------- #

$bot = new Bot(API_KEY);

# -------------- Main Codes -------------- #

if ($text == '/start' || $text == 'بازگشت') {
    $bot->sendMessage($chat_id, 'سلام دوست عزیز', $mainKeyboard);
    die;
}

if ($text == '「 👨‍💻 چت با هوش مصنوعی 」') {
    $bot->sendMessage($from_id, 'لطفا یکی از نسخه های زیر را انتخاب کنید: ', $aiKeyboard);
    die;
}
