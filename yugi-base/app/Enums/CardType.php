<?php

namespace App\Enums;

use App\Traits\EnumHasValues;

enum CardType: string {
    use EnumHasValues;
    case EFFECT_MONSTER = 'Effect Monster';
    case NORMAL_MONSTER = 'Normal Monster';
    case LINK_MONSTER = 'Link Monster';
    case XYZ_MONSTER = 'Xyz Monster';
    case SYNCHRO_MONSTER = 'Synchro Monster';
    case FUSION_EFFECT_MONSTER = 'Fusion Effect Monster';
    case FUSION_NORMAL_MONSTER = 'Fusion Monster';
    case PENDULUM_EFFECT_MONSTER = 'Pendulum Effect Monster';
    case PENDULUM_NORMAL_MONSTER = 'Pendulum Normal Monster';
    case RITUAL_EFFECT_MONSTER = 'Ritual Effect Monster';
    case RITUAL_NORMAL_MONSTER = 'Ritual Normal Monster';
    case SPELL_CARD = 'Spell Card';
    case TRAP_CARD = 'Trap Card';
}
