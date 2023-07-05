<?php

namespace App;

/**
 * Это интерфейс для объекта которые приходит при получении апдейтов
 * подробнее тут https://core.telegram.org/bots/api#update
 */
interface UpdateInterface
{
    public function getUpdateId(): int;

    public function getText(): string;

    public function getChatId(): int|string;

    public function getUserName(): string;
}