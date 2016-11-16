<?php

use Phalcon\Mvc\View;

// Creating a view component
$view = new View();

// Set options to view component
// ...

// Register the installed modules
$application->registerModules(
    [
        "frontend" => function ($di) use ($view) {
            $di->setShared(
                "view",
                function () use ($view) {
                    $view->setViewsDir("../apps/frontend/views/");

                    return $view;
                }
            );
        },
        "index" => function ($di) use ($view) {
            $di->setShared(
                "view",
                function () use ($view) {
                    $view->setViewsDir("../apps/index/views/");

                    return $view;
                }
            );
        }
    ]
);