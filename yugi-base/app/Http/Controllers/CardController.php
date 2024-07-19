<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CardController extends Controller
{

    public function search(Request $request) {
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

    public function add(Request $request) {

    }
}
