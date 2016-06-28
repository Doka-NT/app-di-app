<?php
/**
 * @author Soshnikov Artem <213036@skobka.com>
 * @copyright (c) 28.06.2016 12:26
 */

use skobka\appDi\configuration\Builder;
use Symfony\Component\Yaml\Yaml;

$parameters = Yaml::parse(
    file_get_contents(__DIR__.'/parameters.yml'),
    Yaml::PARSE_OBJECT_FOR_MAP
);

$containers = include __DIR__ . '/containers.php';

$parameters->containers = $containers;

return Builder::build($parameters);