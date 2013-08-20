<?php

/**
 * Bootstrap file
 * @author Peter Zádori
 */

use movi\Config\Configurator;

// Require loader
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../libs/peterzadori/movi/src/loader.php';

// Create configurator
$configurator = new Configurator;
$configurator->addConfig(__DIR__ . '/config/config.neon');

// Enable Debugger
//$configurator->setDebugMode(true);

// Create a container
$container = $configurator->createContainer();

// Run the application!
return $container;
