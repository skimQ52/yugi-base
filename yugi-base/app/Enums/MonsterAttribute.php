<?php

namespace App\Enums;

use App\Traits\EnumHasValues;

enum MonsterAttribute: string {
    use EnumHasValues;
    case DARK = 'DARK';
    case DIVINE = 'DIVINE';
    case EARTH = 'EARTH';
    case FIRE = 'FIRE';
    case LIGHT = 'LIGHT';
    case WATER = 'WATER';
    case WIND = 'WIND';
}
