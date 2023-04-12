<?php
namespace Pyz\Zed\Training\Business;
use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntResponseTransfer;
use Generated\Shared\Transfer\AntTransfer;
interface TrainingFacadeInterface
{
    public function createAnt(AntTransfer $antTransfer): AntTransfer;
    
    public function getAnt(AntCriteriaTransfer $antCriteria): AntResponseTransfer;
}
