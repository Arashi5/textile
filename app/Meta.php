<?php
namespace App;

class Meta {

    public function execute (): array
    {
        $meta = [
            'title' => 'Текстильщик Иваново',
            'regional_football_club' => 'Областной футбольный клуб',
            'unoff_fan_portal' => 'Неофициальный фанатский портал - just for fun',
        ];

        return $meta;
    }
}

