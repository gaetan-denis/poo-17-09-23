<?php

namespace classes;

class capacity
{
    public int $id;
    public string $name;
    public int $minDamage = 1;
    public int $maxDamage;

    public int $category;

    private static array $categories = [self::CAT_OFFENSIVE, self::CAT_DEFENSIVE];

    const CAT_OFFENSIVE = 1;
    const CAT_DEFENSIVE = 2;


    /**
     * @param int $id
     * @param string $name
     * @param int $minDamage
     * @param int $maxDamage
     * @param int $category
     */
    public function __construct(int $id, string $name, int $minDamage, int $maxDamage, int $category = self::CAT_OFFENSIVE)
    {
        $this->id = $id;
        $this->name = $name;
        $this->minDamage = $minDamage;
        $this->maxDamage = $maxDamage;
        // define category : must be part of static property $categories
        if (!in_array($category, self::$categories)) {
            $category = self::CAT_OFFENSIVE;
        }
        $this->category = $category;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getMinDamage(): int
    {
        return $this->minDamage;
    }

    public function setMinDamage(int $minDamage): void
    {
        $this->minDamage = $minDamage;
    }

    public function getMaxDamage(): int
    {
        return $this->maxDamage;
    }

    public function setMaxDamage(int $maxDamage): void
    {
        $this->maxDamage = $maxDamage;
    }

    public function getDamage(): int
    {
        return rand($this->minDamage, $this->maxDamage);
    }

}