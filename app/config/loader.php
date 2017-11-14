<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->routerDir,
        $config->application->requestDir,
    ]
)->register();

$loader->registerNamespaces(
    [
        'App\Controllers' => $config->application->controllersDir,
        'App\Models'      => $config->application->modelsDir,
        'App\Router'      => $config->application->routerDir,
        'App\Request'     => $config->application->requestDir,
    ], true
)->register();
