<?php

namespace classes;

class weapon extends capacity
{
    public int $type;

    private static array $types = [self::CAT_MELEE, self::CAT_RANGED];

    const CAT_MELEE = 1;
    const CAT_RANGED = 2;

    /**
     * @param int $id
     * @param string $name
     * @param int $minDamage
     * @param int $maxDamage
     * @param int $category
     * @param int $type
     */
    public function __construct(int $id, string $name, int $minDamage, int $maxDamage, int $category = self::CAT_OFFENSIVE, int $type = self::CAT_MELEE)
    {
        parent::__construct($id, $name, $minDamage, $maxDamage, $category);
        // define type : must be part of static property $types
        if (!in_array($type, self::$types)) {
            $type = self::CAT_MELEE;
        }
        $this->type = $type;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public static function generateWeapons(): array
    {
        $sword = new \classes\weapon(1, 'épée', 1, 8);
        $dagger = new \classes\weapon(2, 'dague', 1, 4);
        $staff = new \classes\weapon(3, 'bâton', 2, 6);
        $axe = new \classes\weapon(4, 'hache', 1, 10);
        $shield = new \classes\weapon(4, 'bouclier', 1, 4, self::CAT_DEFENSIVE);
        $bow = new \classes\weapon(4, 'arc', 1, 8, self::CAT_OFFENSIVE, self::CAT_RANGED);
        return [$sword, $dagger, $staff, $axe, $shield, $bow];
    }

}