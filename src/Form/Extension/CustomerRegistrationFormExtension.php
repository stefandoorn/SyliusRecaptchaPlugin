<?php

declare(strict_types=1);

namespace StefanDoorn\SyliusRecaptchaPlugin\Form\Extension;

use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;
use Sylius\Bundle\CoreBundle\Form\Type\Customer\CustomerRegistrationType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerRegistrationFormExtension extends AbstractTypeExtension
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('recaptcha', EWZRecaptchaType::class, [
            'mapped' => false,
            'constraints' => [
                new RecaptchaTrue([
                    'groups' => 'sylius',
                ]),
            ],
            'attr' => [
                'defer' => true,
                'async' => true,
            ],
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [CustomerRegistrationType::class];
    }
}
