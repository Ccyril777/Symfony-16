<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.6yS0n0P' shared service.

return $this->privates['.service_locator.6yS0n0P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'episodesRepository' => ['privates', 'App\\Repository\\EpisodesRepository', 'getEpisodesRepositoryService.php', true],
], [
    'episodesRepository' => 'App\\Repository\\EpisodesRepository',
]);
