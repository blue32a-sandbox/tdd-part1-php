<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch02DegenerateObjects;

class Dollar
{
    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }
}
