<?php

namespace Pyz\Client\Training\Stub;

use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntResponseTransfer;
use Generated\Shared\Transfer\AntTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class TrainingStub extends ZedRequestStub
{
    public function getAnt(AntCriteriaTransfer $antCriteria): AntResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\AntResponseTransfer $antResponseTransfer */
        $antResponseTransfer = $this->zedStub->call('/training/gateway/get-ant', $antCriteria);
        
        return $antResponseTransfer;
    }

    public function createAnt(AntTransfer $antTransfer): AntTransfer
    {
        /** @var \Generated\Shared\Transfer\AntTransfer $antTransfer */
        $antTransfer = $this->zedStub->call('/training/gateway/create-ant', $antTransfer);

        return $antTransfer;
    }
}
