<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('zip', [$this, 'zip']),
        ];
    }

    public function zip(...$arrays)
    {
        return array_map(null, ...$arrays);
    }
}
