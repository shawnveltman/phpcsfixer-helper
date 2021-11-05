<?php

namespace Shawnveltman\PhpcsfixerHelper\Tests;

use PHPUnit\Framework\TestCase;
use Shawnveltman\PhpcsfixerHelper\PhpcsfixerHelper;

class FixerHelperTest extends TestCase
{
    public function testBasic()
    {
        $helper = new PhpcsfixerHelper();
        $rules  = $helper->get_style_rules();

        $this->assertTrue(is_array($rules));
    }
}
