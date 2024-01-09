<?php

namespace App\Services\Ai;

use Illuminate\Support\Facades\Http;

class ChatBot implements Ai
{
    public static string $endpoint = 'https://api3.haji-api.ir/majid/gpt/4?q=';

    public static function request(string $prompt): array|string
    {
        $response = Http::get(self::$endpoint . $prompt);
        return $response->ok() ? $response->object()->result : "error";
    }
}
