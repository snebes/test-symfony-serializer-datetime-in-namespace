<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

trait TestTrait
{
    /**
     * @var \DateTime
     */
    private $date1;

    /**
     * @var DateTime
     */
    private $date2;

    /**
     * @return DateTime
     */
    public function getDate1(): ?DateTime
    {
        return $this->date1;
    }

    /**
     * @param DateTime $date1
     *
     * @return self
     */
    public function setDate1(?DateTime $date1): self
    {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate2(): ?DateTime
    {
        return $this->date2;
    }

    /**
     * @param DateTime $date2
     *
     * @return self
     */
    public function setDate2(?DateTime $date2): self
    {
        $this->date2 = $date2;
        return $this;
    }
}
