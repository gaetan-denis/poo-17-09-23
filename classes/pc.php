<?php

namespace classes;

use classes\character;

final class pc extends character implements profile
{
    use profiler;

    public string $pseudo;

    /**
     * @param string $name
     * @param int $id
     * @param string $pseudo
     */
    public function __construct(string $name, int $id, string $pseudo)
    {
        parent::__construct($name, $id);
        $this->pseudo = $pseudo;
        $this->name = $pseudo;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    public function getFrontName(): string
    {
        return $this->pseudo;
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