<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;
use PhpParser\Node\Expr\Cast\Array_;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(2, 2);
        $this->assertEquals(4, $result);
        $this->assertIsFloat($result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->sub(4, 2);
        $this->assertEquals(2, $result);
        $this->assertIsFloat($result);
    }

    public function testMul()
    {
        $result = $this->calculator->mul(2, 2);
        $this->assertEquals(4, $result);
        $this->assertIsFloat($result);
    }

    public function testDiv()
    {
        $result = $this->calculator->div(4, 2);
        $this->assertEquals(2, $result);
        $this->assertIsFloat($result);
    }

    public function testPow()
    {
        $result = $this->calculator->pow(2, 2);
        $this->assertEquals(4, $result);
        $this->assertIsFloat($result);
    }

    public function testSqrt()
    {
        $result = $this->calculator->sqrt(4);
        $this->assertEquals(2, $result);
        $this->assertIsFloat($result);
    }

    public function testSplit()
    {
        $result = array("left" => 5, "right" => 2);
        $this->assertEquals($result, $this->calculator->splitFloat(5.2));
        $this->assertIsArray($this->calculator->splitFloat(5.2));
    }

    public function testRandomCalculatorName()
    {
        $result = $this->calculator->generateRandomCalculatorName();
        $this->assertIsString($result);
        $this->assertStringContainsString('Calculator-', $result);
    }
}
