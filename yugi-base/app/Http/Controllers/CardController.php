<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
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

    public function add(StoreCardRequest $request): JsonResponse
    {

        $validatedData = $request->validated();

        $existingCard = Card::query()->where('name', $validatedData['name'])->first();

        if ($existingCard) {
            $existingCard->quantity += $validatedData['quantity'];
            $existingCard->save();

            return response()->json([
                'data' => $existingCard,
                'message' => 'Card quantity updated successfully!',
            ]);
        }

        $card = Card::query()->create($validatedData);

        return response()->json([
            'data' => $card,
            'message' => 'Card created successfully!',
        ], 201);
    }

    public function index(Request $request): JsonResponse
    {
        $cards = Card::query()->get();

        return response()->json($cards);
    }
}
