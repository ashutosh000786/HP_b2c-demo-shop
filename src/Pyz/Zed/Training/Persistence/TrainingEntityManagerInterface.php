<?php
namespace Pyz\Zed\Training\Persistence;
use Generated\Shared\Transfer\AntTransfer;
interface TrainingEntityManagerInterface
{    
	public function createAnt(AntTransfer $antTransfer): AntTransfer;
}
