<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function index(){
        $update = Telegram::commandsHandler(true);
        $response = $this->getUpdate();
        $name = $response['message']['from']['first_name'];
        $this->replyWithMessage(compact('name'));
    }
}
