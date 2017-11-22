<?php

require __DIR__ . '/../vendor/autoload.php';

use \PHPUnit\Framework\TestCase;
use \Uptodate\Example;

class Test extends TestCase {
    public function testPushAndPop() {
        $example = new Example();
        $phpver = $example->getPhpVersion();
        $this->assertEquals("7.1.11", $phpver);
    }
}