<?php
namespace Pyz\Zed\Training\Communication\Controller;
use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class AntController extends AbstractController
{
    public function addAction()
    {
        $antTransfer = new AntTransfer();
        $antTransfer->setName('Oskar');
        
        $antResponseTransfer = $this->getFacade()
            ->getAnt((new AntCriteriaTransfer())->setName($antTransfer->getName()));
        
        if (!$antResponseTransfer->getAnt()) {
            $antTransfer = $this->getFacade()
                ->createAnt($antTransfer);
        }
        
        return $this->viewResponse([
            'ant' => $antTransfer,
        ]);
    }
}