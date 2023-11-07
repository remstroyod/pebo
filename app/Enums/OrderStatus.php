<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class OrderStatus extends Enum
{

    const NotActive = 0;

    const Await = 1;

    const Active = 2;

    public static $name = [
        self::NotActive => '❌ Відхилено',
        self::Await => 'На модерацii',
        self::Active => '✅ Записано',
    ];
}
