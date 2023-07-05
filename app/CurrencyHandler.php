<?php

namespace App;

interface CurrencyHandler
{
    /**
     * (актуальные курс валюты можно получить тут https://www.cbr-xml-daily.ru/daily_json.js)
     *
     * @param  string  $currency
     *
     * @return float
     */
    public function getCurrencyRate(string $currency): float;
}