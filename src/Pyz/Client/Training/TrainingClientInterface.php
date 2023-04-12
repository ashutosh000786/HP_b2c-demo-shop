<?php

namespace Pyz\Client\Training;

use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntResponseTransfer;
use Generated\Shared\Transfer\AntTransfer;
interface TrainingClientInterface
{
    public function getAnt(AntCriteriaTransfer $antCriteria): AntResponseTransfer;
    public function createAnt(AntTransfer $antTransfer): AntTransfer;
}
