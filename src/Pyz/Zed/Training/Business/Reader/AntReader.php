<?php
namespace Pyz\Zed\Training\Business\Reader;
use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntResponseTransfer;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

class AntReader    
{        
	/**            
	* @var \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface        
	*/        
	protected $trainingRepository;                
	public function __construct(TrainingRepositoryInterface $trainingRepository)        
		{            
			$this->trainingRepository = $trainingRepository;        
		}                
	public function getAnt(AntCriteriaTransfer $antCriteria): AntResponseTransfer        
		{            
			$antTransfer = $this->trainingRepository                
				->getAnt($antCriteria);

			$antResponseTransfer = new AntResponseTransfer();
			$antResponseTransfer                
				->setIsSuccessful(false);                        
				
			if ($antTransfer) 
				{      
					$antResponseTransfer                    
					->setAnt($antTransfer)                    
					->setIsSuccessful(true);        
			}                
				
					return $antResponseTransfer;            
					
		}
}