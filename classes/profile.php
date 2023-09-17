<?php

namespace classes;

/**
 * Une interface est par fonctionnement toujours abstract.
 * Les méthodes ne doivent pas contenir de body (aucun code et pas d'accolades), uniquement la déclaration (nom et paramètres éventuels)
 */
interface profile
{
    public function getFrontName(): string;
    public function getProfile(array $excluded = []): string;

}