<?php

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/** 
* @method \Pyz\Zed\Training\Persistence\TrainingPersistenceFactory getFactory() 
*/

class TrainingRepository extends AbstractRepository implements TrainingRepositoryInterface    
	{    
	public function getAnt(AntCriteriaTransfer $antCriteria): ?AntTransfer    
	{        
		$antEntity = $this->getFactory()
			->createAntQuery()            
			->filterByName($antCriteria->getName())            
			->findOne();                
		if (!$antEntity) {            
		return null;        
		}                
		$antTransfer = new AntTransfer();        
		return $antTransfer->fromArray($antEntity->toArray(), true);    
		}
	}
