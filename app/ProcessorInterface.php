<?php

namespace App;

interface ProcessorInterface
{
    //@TODO: currencyHandler для получения актуального курса

    /**
     * Тут мы будем обрабатывать входящее сообщение
     * при необходимости будем отвечать ответным сообщением
     *
     * @param  UpdateInterface  $update
     *
     * @return void
     */
    public function process(UpdateInterface $update): void;
}