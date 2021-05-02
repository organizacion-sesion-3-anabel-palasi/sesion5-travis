<?php
use PHPUnit\Framework\TestCase;
require 'ComprobacionPar.php';

class ParTest extends TestCase
{
    private $par;
 
    protected function setUp(): void
    {
        $this->par = new esPar();
    }
 
    protected function tearDown(): void
    {
        $this->par = NULL;
    }
 
    public function testPar1(): void
    {
        $result = $this->par->par(1);
        $this->assertEquals(False, $result);
    }
     public function testPar2(): void
    {
        $result = $this->par->par(0);
        $this->assertEquals(True, $result);
    }
     public function testPar3(): void
    {
        $result = $this->par->par(2);
        $this->assertEquals(True, $result);
    }
}
