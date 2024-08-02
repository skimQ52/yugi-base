<?php

namespace App\Http\Requests;

use App\Enums\CardRace;
use App\Enums\CardType;
use App\Enums\MonsterAttribute;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreCardRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'type' => ['required', new Enum(CardType::class)],
            'desc' => 'required|string|max:1000',
            'race' => ['required', new Enum(CardRace::class)],
            'quantity' => 'required|integer|min:1',
            'atk' => 'nullable|integer|min:0',
            'def' => 'nullable|integer|min:0',
            'level' => 'nullable|integer|min:1',
            'archetype' => 'nullable|string|max:255',
            'attribute' => ['nullable', new Enum(MonsterAttribute::class)],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The card name is required.',
            'type.required' => 'The card type is required.',
            'type.enum' => 'The selected card type is invalid.',
            'desc.required' => 'The card description is required.',
            'race.required' => 'The card race is required.',
            'race.enum' => 'The selected card race is invalid.',
            'quantity.required' => 'The quantity is required.',
            'quantity.integer' => 'The quantity must be an integer.',
            'quantity.min' => 'The quantity must be greater than 0.',
            'atk.integer' => 'The attack value must be an integer.',
            'def.integer' => 'The defense value must be an integer.',
            'level.integer' => 'The level must be an integer.',
            'archetype.string' => 'The archetype must be a string.',
            'attribute.enum' => 'The selected attribute is invalid.',
        ];
    }
}
