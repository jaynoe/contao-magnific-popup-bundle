<?php

namespace Jaynoe\ContaoMagnificPopupBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Jaynoe\ContaoMagnificPopupBundle\ContaoMagnificPopupBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoMagnificPopupBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}