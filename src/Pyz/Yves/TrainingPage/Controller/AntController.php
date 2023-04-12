<?php
namespace Pyz\Yves\TrainingPage\Controller;
use Generated\Shared\Transfer\AntCriteriaTransfer;
use SprykerShop\Yves\ShopApplication\Controller\AbstractController;
/**
 * @method \Pyz\Yves\TrainingPage\TrainingPageFactory getFactory()
 */
class AntController extends AbstractController
{
    public function getAction(string $name)
    {
        $antCriteriaTransfer = new AntCriteriaTransfer();
        $antCriteriaTransfer->setName($name);
        
        $antResponseTransfer = $this->getFactory()
            ->getTrainingClient()
            ->getAnt($antCriteriaTransfer);
        
        return $this->view(
            ['ant' => $antResponseTransfer->getAnt()],
            [],
            '@TrainingPage/views/ant/get.twig'
        );
    }
}