<?php

namespace Kolpikov\Packages\Routing;

use Illuminate\Routing\ResourceRegistrar;

class AppResourceRegistrar extends ResourceRegistrar
{
    /**
     * The default actions for a resourceful controller.
     *
     * @var array
     */
    protected $resourceDefaults = [
        'index',
        'create',
        'store',
        'show',
        'edit',
        'update',
        'destroy',
        'sort',
        'softdelete',
    ];


    /**
     * Add the index method for a resourceful route.
     *
     * @param  string  $name
     * @param  string  $base
     * @param  string  $controller
     * @param  array   $options
     * @return \Illuminate\Routing\Route
     */
    protected function addResourceSort($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name . '/sort');

        $action = $this->getResourceAction($name, $controller, 'sort', $options);

        return $this->router->match(['PUT', 'PATCH'], $uri, $action);
    }

    /**
     * Add the softdelete method for a resourceful route.
     *
     * @param  string  $name
     * @param  string  $base
     * @param  string  $controller
     * @param  array   $options
     * @return \Illuminate\Routing\Route
     */
    protected function addResourceSoftdelete($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name).'/{'.$base.'}';

        $action = $this->getResourceAction($name, $controller, 'softdelete', $options);

        return $this->router->match(['PUT', 'PATCH'], $uri, $action);
    }
}
