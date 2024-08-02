<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CardController extends Controller
{

    public function search(Request $request): JsonResponse
    {
        $request->validate([

        ]);

        $name = $request->input('name');

        $response = Http::get('https://db.ygoprodeck.com/api/v7/cardinfo.php', [
            'fname' => $name
        ]);

        $cards = $response['data'];

        $filteredCards = array_map(function ($card) {
            return [
                'name' => $card['name'],
                'type' => $card['type'],
                'link' => $card['ygoprodeck_url'],
            ];
        }, $cards);

        return response()->json($filteredCards);
    }

    public function add(Request $request): JsonResponse
    {

        $card = Card::query()->create([
            'name' => 'Blue-Eyes Fire Drake',
            'type' => 'Effect Monster',
            'frame_type' => 'effect',
            'desc' => 'Blast-off you insolent fortniter',
            'atk' => 3000,
            'def' => 0,
            'level' => 8,
            'race' => 'Pyro',
            'attribute' => 'Fire',
            'archetype' => 'Blue-Eyes'
        ]);

        return response()->json($card);
    }

    public function index(Request $request): JsonResponse
    {

        $cards = Card::query()->get();

        return response()->json($cards);
    }
}
