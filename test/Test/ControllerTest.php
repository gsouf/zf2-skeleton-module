<?php

namespace Test;

use PHPUnit_Framework_TestCase;

class ControllerTest extends PHPUnit_Framework_TestCase
{
  

    public function testItWorks()
    {
        $itWorks=new \ModuleName\TestPackage\ItWorks();
        $this->assertEquals("it does !",$itWorks->doesntIt());
    }

}
