<?php
namespace Pyz\Zed\Training\Business;

use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntResponseTransfer;
use Generated\Shared\Transfer\AntTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;
/**
 * @method \Pyz\Zed\Training\Business\TrainingBusinessFactory getFactory()
 */
class TrainingFacade extends AbstractFacade implements TrainingFacadeInterface
{
    public function createAnt(AntTransfer $antTransfer): AntTransfer
    {
        return $this->getFactory()
            ->createAntWriter()
            ->create($antTransfer);
    }
    
    public function getAnt(AntCriteriaTransfer $antCriteria): AntResponseTransfer
    {
        return $this->getFactory()
            ->createAntReader()
            ->getAnt($antCriteria);
    }
}