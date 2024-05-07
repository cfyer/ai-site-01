<?php

namespace App\Services\Ai;

use App\Models\Art;
use Illuminate\Support\Facades\Http;

class ImageGeneration implements Ai
{
    public static string $endpoint = 'https://api3.haji-api.ir/majid/ai/image/dalle3?p=';

    public static function request(string $prompt): array|string
    {
        try {
            $request = Http::withoutVerifying()->get(self::url($prompt))->object();
            $arts = [];
            foreach ($request->result as $link){
                $newPath = 'arts/' . time() . '.png';
                copy($link, public_path($newPath), stream_context_create([
                    "ssl"=>array(
                        "verify_peer"=>false,
                        "verify_peer_name"=>false,
                    )
                ]));
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

    private static function url(string $prompt): string
    {
        return self::$endpoint . $prompt . '&license=' . config('services.ai.key');
    }
}
