<?php
namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntTransfer;

interface TrainingRepositoryInterface
{    
	public function getAnt(AntCriteriaTransfer $antCriteria): ?AntTransfer;
}
