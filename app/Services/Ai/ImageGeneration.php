<?php

namespace App\Services\Ai;

use App\Models\Art;
use Illuminate\Support\Facades\Http;

class ImageGeneration implements Ai
{
    public static string $endpoint = 'https://api3.haji-api.ir/majid/ai/image/draw/dalle?p=';

    public static function request(string $prompt): array|string
    {
        try {
            $request = Http::get(self::$endpoint . $prompt)->object();

            $arts = [];

            foreach ($request->result as $imagePath){

                $newPath = 'arts/' . time() . '-' . rand(111, 999) . '.png';

                copy($imagePath, public_path($newPath));

                $arts[] = Art::query()->create([
                    'prompt' => $prompt,
                    'user_id' => auth()->id(),
                    'source' => $newPath
                ]);

            }

            return $arts;

        }catch (\Exception){

            return [];

        }
    }
}
