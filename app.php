<?php
/**
 * @author Soshnikov Artem <213036@skobka.com>
 * @copyright (c) 28.06.2016 12:28
 */

use App\Application;
use DI\ContainerBuilder;
use skobka\appDi\configuration\interfaces\ConfigurationInterface;
use skobka\appDi\configuration\interfaces\ContainerDefinitionInterface;
use skobka\appDi\interfaces\ApplicationInterface;
use skobka\appDi\interfaces\ContainerisedInterface;

include __DIR__."/vendor/autoload.php";
/* @var $conf ConfigurationInterface|ContainerDefinitionInterface */
$conf = include __DIR__."/config/bootstrap.php";

$build = new ContainerBuilder();
$build->addDefinitions($conf->getDefinitions());
$container = $build->build();

/* @var $appInstance ApplicationInterface|ContainerisedInterface */
$appInstance = $container->get(Application::class);
$appInstance->setContainer($container);

$appInstance->start();