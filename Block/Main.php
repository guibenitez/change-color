<?php
namespace Guilherme\ChangeColor\Block;
use Magento\Framework\View\Element\Template;
use Guilherme\ChangeColor\Console\Command\ChangeColorButton;

class Main extends Template
{
    const COLOR_BACKGROUND = \Guilherme\ChangeColor\Console\Command\ChangeColorButton::COLOR;
    public function getBackgroundColor()
    {
        return self::COLOR_BACKGROUND;
    }
}