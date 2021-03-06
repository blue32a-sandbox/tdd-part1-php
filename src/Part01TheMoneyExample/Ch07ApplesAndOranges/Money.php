<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch07ApplesAndOranges;

class Money
{
    protected int $amount;

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }
}
