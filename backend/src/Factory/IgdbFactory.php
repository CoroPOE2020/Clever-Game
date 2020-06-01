<?php

namespace App\Factory;

use App\Entity\Game;
use App\DTO\GameDto;

class IgdbFactory
{
    /**
     * @param GameDto $gameDto
     *
     * @return Game $gameEntity
     */
    public static function CreateGame(GameDto $gameDto)
    {
        $gameEntity = new Game;
        $gameEntity->setIdentifier($gameDto->getIdentifier());
        $gameEntity->setName($gameDto->getName());

        return $gameEntity;
    }
}