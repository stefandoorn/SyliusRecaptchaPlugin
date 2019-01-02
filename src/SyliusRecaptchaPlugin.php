<?php

declare(strict_types=1);

namespace StefanDoorn\SyliusRecaptchaPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusRecaptchaPlugin extends Bundle
{
    use SyliusPluginTrait;
}
