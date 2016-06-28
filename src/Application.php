<?php
/**
 * @author Soshnikov Artem <213036@skobka.com>
 * @copyright (c) 28.06.2016 12:27
 */

namespace App;

use Interop\Container\ContainerInterface;
use skobka\appDi\interfaces\ApplicationInterface;
use skobka\appDi\interfaces\ContainerisedInterface;

/**
 * Class Application
 */
class Application implements ApplicationInterface, ContainerisedInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Start an application instance
     * @return void
     */
    public function start()
    {
        //TODO: create logic
        echo "Hello world";
    }

    /**
     * Set container to the current object
     * @param \Interop\Container\ContainerInterface $container
     * @return void
     */
    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }
}