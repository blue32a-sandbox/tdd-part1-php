<?php

declare(strict_types=1);

namespace Tests\Part01heMoneyExample\Ch04Privacy;

use PHPUnit\Framework\TestCase;
use TDDPHP\Part01TheMoneyExample\Ch04Privacy\Dollar;

class DollerTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
