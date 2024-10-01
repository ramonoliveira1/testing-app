<?php

namespace App\Helpers;

class GetColor
{
    public static function getColor(string $status): string
    {
        return match ($status) {
            'pending' => 'yellow',
            'in progress' => 'blue',
            'completed' => 'green',
            'cancelled' => 'red',
            default => 'gray',
        };
    }
}
