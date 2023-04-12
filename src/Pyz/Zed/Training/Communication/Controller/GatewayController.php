<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;
use Generated\Shared\Transfer\AntResponseTransfer;
use Generated\Shared\Transfer\AntTransfer;
use Generated\Shared\Transfer\AntCriteriaTransfer;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */

class GatewayController extends AbstractGatewayController
{
    public function getAntAction(AntCriteriaTransfer $antCriteria) : AntResponseTransfer
    {
        return $this->getFacade()
            
            ->getAnt($antCriteria);
    }
    public function createAntAction(AntTransfer $antTransfer): AntTransfer
    {
        return $this->getFacade()
            ->createAnt($antTransfer);
    }

}