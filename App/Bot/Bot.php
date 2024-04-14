<?php

namespace App\Bot;

use TelegramBot\Api\BotApi;


class Bot extends BotApiController
{
    private $botApi;
    private $bot;

    public function __construct(string $token) {
        
        
        $this->bot = new BotApi($token);

        $this->botApi = new BotApiController();

        $this->botApi->setChatId($token);

    }

    public function sendMessage($message, $parseMode, $disablePreview, $replyToMessageId, $replyMarkup)
    {
        try {
            $this->bot->sendMessage($this->botApi->getChatId(), $message, $parseMode, $disablePreview, $replyToMessageId, $replyMarkup);
        } catch (\Exception $botEx) {
            $botEx->getMessage();
        }
    }
}