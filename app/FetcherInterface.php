<?php

namespace App;

interface FetcherInterface
{
    // @TODO: offset внутренний счетчик для скипа сообщений, где бы его хранить????

    /**
     * Получить список Update объектов
     *
     * @return array<UpdateInterface>
     */
    public function fetch(int $limit): array;
}