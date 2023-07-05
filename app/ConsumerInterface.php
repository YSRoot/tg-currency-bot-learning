<?php

namespace App;

interface ConsumerInterface
{
    // @TODO: fetcher
    // @TODO: processor
    // @TODO: fetchSize

    /**
     * Используя Fetcher нужно будет получать все свежии апдейты
     * и обработать ответ если он нужен используя e
     * отправить ответ используя Processor
     *
     * @return void
     */
    public function start(): void;
}