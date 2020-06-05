<?php

namespace App\Action;

use App\Entity\Game;
use App\Service\GameImporter;
use App\Service\ImportIgdb;
use Doctrine\Common\Persistence\ManagerRegistry;

class GameAction extends AbstractSearchAction
{
    protected $entity = Game::class;
    protected $apiEndpoint = 'games';
    protected $fields = 'name, rating, summary, url, age_ratings, first_release_date, cover';
    protected $options = 'where version_parent = null & category = 0';

    public function __construct(ManagerRegistry $managerRegistry, ImportIgdb $importIgdb, GameImporter $gameImporter) {

        parent::__construct(
            $managerRegistry,
            $importIgdb,        
            $gameImporter);
    }

    /**
     * @param string $game
     * @param string $force
     */
    public function __invoke($game, $force)
    {
        return $this->ActionJsonResponse($game, $force);
    }
}
