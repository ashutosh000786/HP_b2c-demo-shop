<?php
namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntTransfer;
use Orm\Zed\Ant\Persistence\PyzAnt;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

class TrainingEntityManager extends AbstractEntityManager implements TrainingEntityManagerInterface

{    

	public function createAnt(AntTransfer $antTransfer): AntTransfer    
	{        
		$antEntity = new PyzAnt();
		$antEntity->fromArray($antTransfer->modifiedToArray());        
		$antEntity->save();                
		
		return $antTransfer->fromArray($antEntity->toArray(), true);    
	}
}