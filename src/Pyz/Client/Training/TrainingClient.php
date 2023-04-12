<?php

namespace Pyz\Client\Training;

use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntResponseTransfer;
use Generated\Shared\Transfer\AntTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\Training\TrainingFactory getFactory()
 */
class TrainingClient extends AbstractClient implements TrainingClientInterface
{
    public function getAnt(AntCriteriaTransfer $antCriteria): AntResponseTransfer
    {
        return $this->getFactory()
            ->createTrainingStub()
            ->getAnt($antCriteria);
    }
    public function createAnt(AntTransfer $antTransfer): AntTransfer
    {
        return $this->getFactory()
            ->createTrainingStub()
            ->createAnt($antTransfer);
    }
}