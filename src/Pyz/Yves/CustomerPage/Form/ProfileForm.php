<?php

namespace Pyz\Yves\CustomerPage\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use SprykerShop\Yves\CustomerPage\Form\ProfileForm as SprykerProfileForm;

/**
 * @method \Pyz\Yves\CustomerPage\CustomerPageFactory getFactory()
 */
class ProfileForm extends SprykerProfileForm
{
    public const FIELD_ANT = 'fk_ant';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $this->addAntField($builder);
    }

    public function addAntField(FormBuilderInterface $builder)
    {
        $builder->add(self::FIELD_ANT, TextType::class, [
            'label' => 'Adharcard',
            
            // 'placeholder' => 'Enter 12 Digit Adhar ID',
            'required' => true,
            'constraints' => [
                $this->createNotBlankConstraint(),
            ],
        ]);

        $builder->get(self::FIELD_ANT)->addModelTransformer(
            $this->getFactory()->createAntTransformer()
        );

        return $this;
    }
}
