<?php

namespace App;

interface TelegramClientInterface
{
    // @TODO: host
    // @TODO: basePath

    // @TODO: конструктор с инициализацией хост и basePath

    /**
     * @param  int  $offset
     * @param  int  $limit
     *
     * Send request to getUpdate (https://core.telegram.org/bots/api#getupdates)
     *
     * @return array<UpdateInterface>
     */
    public function fetchUpdates(int $offset, int $limit): array;

    /**
     * Send request to sendMessage (https://core.telegram.org/bots/api#sendmessage)
     *
     * @param  MessageInterface  $message
     *
     * @return void
     */
    public function sendMessage(MessageInterface $message): void;
}