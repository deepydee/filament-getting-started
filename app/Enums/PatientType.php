<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PatientType: string implements HasLabel
{
    case  Cat = 'cat';
    case  Dog = 'dog';
    case Rabbit = 'rabbit';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Cat => 'Cat',
            self::Dog => 'Dog',
            self::Rabbit => 'Rabbit',
        };
    }
}
