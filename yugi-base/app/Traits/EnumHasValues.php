<?php

namespace App\Traits;

use Illuminate\Support\Collection;

trait EnumHasValues
{
    /**
     * Returns all case values as a Collection or Array.
     *
     * @param bool $asArray
     *
     * @return Collection|array
     */
    public static function values(bool $asArray = false): Collection|array
    {
        $values = collect(static::cases())->pluck('value');

        return ($asArray) ? $values->toArray() : $values;
    }
}
