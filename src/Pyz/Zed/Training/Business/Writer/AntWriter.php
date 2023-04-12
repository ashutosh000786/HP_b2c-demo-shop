<?php

namespace Pyz\Zed\Training\Business\Writer;

use Generated\Shared\Transfer\AntTransfer;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;

class AntWriter

{    
	/**    
	* @var \Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface    
	*/    

	protected $trainingEntityManager;
        
	public function __construct(TrainingEntityManagerInterface $trainingEntityManager)    
	{        
		$this->trainingEntityManager = $trainingEntityManager;    
	}   

	public function create(AntTransfer $antTransfer): AntTransfer    
	{        
		return $this->trainingEntityManager->createAnt($antTransfer);    
	}
}
