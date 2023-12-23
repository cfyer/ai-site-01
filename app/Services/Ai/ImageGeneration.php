<?php

namespace App\Services\Ai;

use App\Models\Art;
use Illuminate\Support\Facades\Http;

class ImageGeneration
{
    public static string $endpoint = 'https://api3.haji-api.ir/majid/ai/image/draw?p=';

    public static function request(string $prompt)
    {
        try {
            $request = Http::get(self::$endpoint . $prompt)->object();
            foreach ($request->result as $imagePath){
                $newPath = public_path('/arts/') . time() . '-' . rand(111, 999) . '.png';
                copy($imagePath, $newPath);
                Art::query()->create([
                    'prompt' => $prompt,
                    'user_id' => auth()->id(),
                    'source' => $newPath
                ]);
                return true;
            }
        }catch (\Exception $exception){
            return false;
        }
    }
}
