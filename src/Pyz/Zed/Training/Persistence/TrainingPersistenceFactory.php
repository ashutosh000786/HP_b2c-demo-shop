<?php
namespace Pyz\Zed\Training\Persistence;
use Orm\Zed\Ant\Persistence\PyzAntQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class TrainingPersistenceFactory extends AbstractPersistenceFactory
{    
public function createAntQuery(): PyzAntQuery    
	{        
		return PyzAntQuery::create();
	}
}