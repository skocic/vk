<?php

namespace Vk\Tests;

use Vk\Dummy;

class DummyTest extends \PHPUnit_Framework_TestCase
{
    public function testDummy()
    {
        $d = new Dummy();
        $this->assertInstanceOf('Vk\Dummy', $d);
        $d->setVar(1);
        $this->assertEquals(1, $d->getVar());
    }
}