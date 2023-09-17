<?php

namespace classes;

use classes\character;

final class npc extends character implements profile
{
    use profiler;

    private int $killed;

    public function getKilled(): int
    {
        return $this->killed;
    }

    public function setKilled(int $killed): void
    {
        $this->killed = $killed;
    }

    public function getFrontName(): string
    {
        return $this->name;
    }

    public function getProfile(array $excluded = []): string
    {
        $output = '';
        foreach ($this as $key => $value) {
            if (!in_array($key, $excluded)) {
                $output .= "$key => $value\n";
            }
        }
        return $output;
    }

}