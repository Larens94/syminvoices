<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.doctrine_migrations.diff_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDiffDoctrineCommand.php';

return $this->services['console.command.public_alias.doctrine_migrations.diff_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();
