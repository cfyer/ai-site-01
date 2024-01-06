<?php

namespace App\Services\Ai;

use Illuminate\Support\Facades\Http;

class ChatBot
{
    public static string $endpoint = 'https://api3.haji-api.ir/majid/gpt/4?q=';

    public static function request(string $prompt): bool|string
    {
        $request = Http::get(self::$endpoint . $prompt)->object();


        return  false;
    }
}
