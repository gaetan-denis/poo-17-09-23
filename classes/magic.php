<?php

namespace classes;

class magic extends capacity
{

    private int $defense = 0;

    public function __construct(int $id, string $name, int $minDamage, int $maxDamage, int $category = self::CAT_OFFENSIVE, int $defense = 0)
    {
        parent::__construct($id, $name, $minDamage, $maxDamage, $category);
        $this->defense = $defense;
    }

    public function getDefense(): int
    {
        return $this->defense;
    }

    public static function generateMagic(): array
    {
        $protection = new \classes\magic(1, 'protection', 0 , 0);
        $fireball = new \classes\magic(2, 'fireball', 2, 20);
        $shield = new \classes\magic(3, 'shield', 0, 0, self::CAT_DEFENSIVE, 2);
        return [$protection, $fireball];
    }

}