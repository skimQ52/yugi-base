<?php

namespace App\Enums;

use App\Traits\EnumHasValues;

enum CardRace: string {
    use EnumHasValues;
    case FIELD = 'Field';
    case CONTINUOUS = 'Continuous';
    case QUICK_PLAY = 'Quick-Play';
    case EQUIP = 'Equip';
    case RITUAL = 'Ritual';
    case COUNTER = 'Counter';
    case AQUA = 'Aqua';
    case BEAST = 'Beast';
    case BEAST_WARRIOR = 'Beast-Warrior';
    case CREATOR_GOD = 'Creator God';
    case CYBERSE = 'Cyberse';
    case DINOSAUR = 'Dinosaur';
    case DIVINE_BEAST = 'Divine-Beast';
    case DRAGON = 'Dragon';
    case FAIRY = 'Fairy';
    case FIEND = 'Fiend';
    case FISH = 'Fish';
    case INSECT = 'Insect';
    case ILLUSION = 'Illusion';
    case MACHINE = 'Machine';
    case PLANT = 'Plant';
    case PSYCHIC = 'Psychic';
    case PYRO = 'Pyro';
    case REPTILE = 'Reptile';
    case ROCK = 'Rock';
    case SEA_SERPENT = 'Sea Serpent';
    case SPELLCASTER = 'Spellcaster';
    case THUNDER = 'Thunder';
    case WARRIOR = 'Warrior';
    case WINGED_BEAST = 'Winged Beast';
    case WYRM = 'Wyrm';
    case ZOMBIE = 'Zombie';
}
