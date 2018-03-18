<?php

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase{

    public function testVersion(){
        $this->assertSame('0.0.1', Raybird\Main::VERSION);
    }
}