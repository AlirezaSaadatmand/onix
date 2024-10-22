<?php

// Main update
if (isset($update->message)) {
    $message     = $update->message;
    $text        = $message->text;
    $from_id     = $message->from->id;
    $first_name  = $message->from->first_name;
    $chat_id     = $message->chat->id;
    $first_name  = htmlspecialchars($message->from->first_name, ENT_QUOTES, 'UTF-8');
    $message_id  = $update->message->message_id;
}

// callback data for when using inline keyboards

// if (isset($update->callback_query)) {
//     $callback_id = $update->callback_query->id;
//     $from_id     = $update->callback_query->from->id;
//     $data        = $update->callback_query->data;
//     $query_id    = $update->callback_query->id;
//     $type        = $update->callback_query->message->chat->type;
//     $message_id  = $update->callback_query->message->message_id;
// }
