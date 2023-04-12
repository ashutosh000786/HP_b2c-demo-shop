<?php

namespace Pyz\Yves\CustomerPage;

use Pyz\Client\Training\TrainingClientInterface;
use Pyz\Yves\CustomerPage\Form\FormFactory;
use Pyz\Yves\CustomerPage\Form\Transformer\AntTransformer;
use SprykerShop\Yves\CustomerPage\CustomerPageFactory as SprykerCustomerPageFactory;

class CustomerPageFactory extends SprykerCustomerPageFactory
{
    public function createCustomerFormFactory()
    {
        return new FormFactory();
    }
    public function createAntTransformer(): AntTransformer
        {
        return new AntTransformer(
            $this->getTrainingClient()
        );
        }

    public function getTrainingClient(): TrainingClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::CLIENT_TRAINING);
    }
}