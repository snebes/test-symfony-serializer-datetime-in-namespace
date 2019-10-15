<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeImmutable;

class TestModel extends AbstractModel
{
    use TestTrait;

    /**
     * @var DateTimeImmutable
     */
    private $date3;

    /**
     * @return DateTimeImmutable
     */
    public function getDate3(): DateTimeImmutable
    {
        return $this->date3;
    }

    /**
     * @param DateTimeImmutable $date3
     *
     * @return self
     */
    public function setDate3(DateTimeImmutable $date3): self
    {
        $this->date3 = $date3;
        return $this;
    }
}
