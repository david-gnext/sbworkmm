<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Url;
use Phalcon\Loader;

$di = new FactoryDefault();

// Specify routes for modules
// More information how to set the router up https://docs.phalconphp.com/en/latest/reference/routing.html
$di->set(
        "router", function () {
    $router = new Router();

    $router->setDefaultModule("index");
    foreach (["top", "index", "common","product"] as $module) {
        $router->add('/' . $module, [
            'module' => $module,
            'action' => 'index',
            'params' => 'index'
        ]);
        $router->add('/' . $module . '/:controller', [
            'module' => $module,
            'controller' => 1,
            'action' => 'index'
        ]);
        $router->add('/' . $module . '/:controller/:action/:params', [
            'module' => $module,
            'controller' => 1,
            'action' => 2,
            'params' => 3
        ]);
    }
    return $router;
}
);

$di->set(
        "url", function () {
    $url = new Url();

    $url->setBaseUri("/sbworkmm/");

    return $url;
}
);
// Create an application
$application = new Application($di);

// Register the installed modules
$application->registerModules(
        [
            "top" => [
                "className" => "Top\\Module",
                "path" => "../apps/top/Module.php",
            ],
            "index" => [
                "className" => "Index\\Module",
                "path" => "../apps/index/Module.php",
            ],
            "common" => [
                "className" => "Common\\Module",
                "path" => "../apps/common/Module.php",
            ],
            "product" => [
                "className" => "Product\\Module",
                "path" => "../apps/product/Module.php",
            ]
          
        ]
);
//register common controller and model
$loader = new Loader();

$loader->registerNamespaces(
        [
            "Common\\Controllers" => "../apps/common/controllers/",
            "Common\\Models" => "../apps/common/models/",
        ]
);

$loader->register();

try {
    // Handle the request
    $response = $application->handle();

    $response->send();
} catch (\Exception $e) {
    echo $e->getMessage();
}
