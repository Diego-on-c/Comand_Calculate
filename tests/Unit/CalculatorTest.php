<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Console\Commands\calculadora;

class CalculatorTest extends TestCase
{

    public function test_if_calculator_can_sum()
    {
        $num1 = 10;
        $num2 = 15;
        $calculator = new calculadora();
        $result = $calculator->handle($num1, $num2);
        $this->assertEquals(25, $result);
    }

    public function test_if_calculator_can_rest()
    {
        $num1 = 10;
        $num2 = 15;
        $calculator = new calculadora();
        $result = $calculator->handle($num1, $num2);
        $this->assertEquals(-5, $result);
    }
}
