<?php

namespace App\Services\Ai;

interface Ai
{
    public static function request(string $prompt): array|string;
}
