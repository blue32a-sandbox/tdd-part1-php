<?php

declare(strict_types=1);

namespace Tests\Part01heMoneyExample\Ch12AdditionFinally;

use PHPUnit\Framework\TestCase;
use TDDPHP\Part01TheMoneyExample\Ch12AdditionFinally\Bank;
use TDDPHP\Part01TheMoneyExample\Ch12AdditionFinally\Money;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = Money::dollar(5);

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(Money::dollar(10), $five->times(2));
        // $this->assertEquals(Money::dollar(15), $five->times(3));
        $this->assertTrue(Money::dollar(10)->equals($five->times(2)));
        $this->assertTrue(Money::dollar(15)->equals($five->times(3)));
    }

    public function testEquality(): void
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }

    public function testcurrency(): void
    {
        $this->assertEquals('USD', Money::dollar(1)->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }

    public function testSimpleAddition(): void
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, 'USD');

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(Money::dollar(10), $reduced);
        $this->assertTrue(Money::dollar(10)->equals($reduced));
    }
}
