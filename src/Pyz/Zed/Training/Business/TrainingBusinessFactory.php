<?php
namespace Pyz\Zed\Training\Business;
use Pyz\Zed\Training\Business\Reader\AntReader;
use Pyz\Zed\Training\Business\Writer\AntWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
/**
 * @method \Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface getRepository()
 */
class TrainingBusinessFactory extends AbstractBusinessFactory
{
    public function createAntWriter(): AntWriter
    {
        return new AntWriter(
            $this->getEntityManager()
        );
    }
    
    public function createAntReader(): AntReader
    {
        return new AntReader(
            $this->getRepository()
        );
    }
}