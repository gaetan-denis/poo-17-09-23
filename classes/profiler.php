<?php

namespace classes;

/**
 * Le trait est une classe abstraite permettant à d'autres classes d'implémenter des méthodes au comportement identique.
 * L'héritage n'est pas nécessaire, l'utilisation du mot "use" associé au nom du trait suffit à l'implémenter dans une classe.
 */
trait profiler
{
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