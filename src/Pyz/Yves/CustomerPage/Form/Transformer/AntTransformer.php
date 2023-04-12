<?php

namespace Pyz\Yves\CustomerPage\Form\Transformer;

use Generated\Shared\Transfer\AntCriteriaTransfer;
use Generated\Shared\Transfer\AntTransfer;
use Pyz\Client\Training\TrainingClientInterface;
use Symfony\Component\Form\DataTransformerInterface;

class AntTransformer implements DataTransformerInterface
{
    protected $trainingClient;

    public function __construct(TrainingClientInterface $trainingClient)
    {
        $this->trainingClient = $trainingClient;
    }

    public function transform($value)
    {
        if (!$value) {
            return '';
        }

        $antResponseTransfer = $this->trainingClient
            ->getAnt((new AntCriteriaTransfer())->setIdAnt($value));

        if (!$antResponseTransfer->getAnt()) {
            return '';
        }

        return $antResponseTransfer->getAnt()->getName();
    }

    public function reverseTransform($value)
    {
        if (!$value) {
            return null;
        }

        $antResponseTransfer = $this->trainingClient
            ->getAnt((new AntCriteriaTransfer())->setName($value));

        if ($antResponseTransfer->getAnt()) {
            return $antResponseTransfer->getAnt()->getIdAnt();
        }

        $antTransfer = new AntTransfer();
        $antTransfer->setName($value);

        return $this->trainingClient
            ->createAnt($antTransfer)->getIdAnt();
    }
}