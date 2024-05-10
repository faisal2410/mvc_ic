<?php

use App\Database;
use Framework\Container;

$container = new Container();


$container->set(Database::class, function () {

    return new Database($_ENV["DB_HOST"], $_ENV["DB_NAME"], $_ENV["DB_USER"], $_ENV["DB_PASSWORD"]);
});

$container->set(Framework\TemplateViewerInterface::class, function(){

    return new Framework\MVCTemplateViewer;
});

return $container;