<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api as BotTelegram;

class Bot extends Controller
{

    public function sendMessageToGroup($msg) {
        $bot = new BotTelegram(env('BOT_TOKEN'));
        return $bot->sendMessage([
            'chat_id' => env('ID_SUPER_GROUP'),
            'text' => $msg
        ]);
    }

}
