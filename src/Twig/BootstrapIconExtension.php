<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Bootstrap 5 Icons
 * @link https://icons.getbootstrap.com/
 *
 * Adapted from BraincraftedBootstrapBundle
 * @link https://github.com/braincrafted/bootstrap-bundle
 */
class BootstrapIconExtension extends AbstractExtension
{
    private $iconPrefix;
    private $iconTag;

    public function __construct(string $iconPrefix = 'bi', string $iconTag = 'i')
    {
        $this->iconPrefix = $iconPrefix;
        $this->iconTag = $iconTag;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction(
                'icon',
                [$this, 'iconFunction'],
                ['pre_escape' => 'html', 'is_safe' => array('html')]
            )
        ];
    }

    public function iconFunction(string $icon, string $iconSet = 'bi'): string
    {
        if ($iconSet === 'bi') {
            $iconSet = $this->iconPrefix;
        }
        $icon = str_replace('+', ' '.$iconSet.'-', $icon);
        return sprintf('<%1$s class="%2$s %2$s-%3$s"></%1$s>', $this->iconTag, $iconSet, $icon);
    }
}
