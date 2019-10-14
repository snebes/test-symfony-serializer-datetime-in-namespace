<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

class TestModel
{
    use TestTrait;

    /**
     * @var DateTime
     */
    private $date3;

    /**
     * @return DateTime
     */
    public function getDate3(): DateTime
    {
        return $this->date3;
    }

    /**
     * @param DateTime $date3
     *
     * @return self
     */
    public function setDate3(DateTime $date3): self
    {
        $this->date3 = $date3;
        return $this;
    }
}
