<?php

namespace Pyz\Yves\TrainingPage\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class TrainingPageRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_NAME_TRAINING_ANT_NAME = 'training/ant/_name_';
    
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addTrainingAntGetRoute($routeCollection);
        
        return $routeCollection;
    }
    
    private function addTrainingAntGetRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('training/ant/{name}', 'TrainingPage', 'Ant', 'getAction');
        $route = $route->setMethods(['GET']);
        $routeCollection->add(static::ROUTE_NAME_TRAINING_ANT_NAME, $route);
        
        return $routeCollection;
    }
}