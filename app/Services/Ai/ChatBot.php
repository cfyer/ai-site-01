<?php

namespace App\Services\Ai;

use Illuminate\Support\Facades\Http;

class ChatBot implements Ai
{
    public static string $endpoint = 'https://api3.haji-api.ir/majid/gpt/4?q=';

    public static function request(string $prompt): array|string
    {
        return Http::get(self::$endpoint . $prompt)->object()->result;
    }
}
