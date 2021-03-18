<?php

namespace Tallui\WebComponents\Tests;

use PHPUnit\Framework\TestCase;
use Tallui\WebComponents\TalluiWebComponents;

class WebComponentsTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = TalluiWebComponents::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623 ,$lbs);
    }
}
