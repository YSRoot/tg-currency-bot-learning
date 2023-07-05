<?php

namespace App;

/**
 * Это интерфейс для ответного сообщения
 */
interface MessageInterface
{
    public function getChatId(): int|string;

    public function getText(): string;
}