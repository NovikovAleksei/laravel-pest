<?php

namespace App\Models\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self INACTIVE()
 * @method static self ACTIVE()
 */
class PersonStatus extends Enum
{
    public function label(): string
    {
        return match($this->value) {
            self::INACTIVE()->value => 'inactive',
            self::ACTIVE()->value => 'active',
        };
    }

    public function color(): string
    {
        return match($this->value) {
            self::INACTIVE()->value => 'bg-red-500',
            self::ACTIVE()->value => 'bg-green-500',
        };
    }
}
