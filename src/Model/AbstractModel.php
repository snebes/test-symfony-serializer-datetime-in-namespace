<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

abstract class AbstractModel
{
    /**
     * @var \DateTime
     */
    protected $date4;

    /**
     * @var DateTime
     */
    protected $date5;

    /**
     * @return DateTime
     */
    public function getDate4(): DateTime
    {
        return $this->date4;
    }

    /**
     * @param DateTime $date4
     *
     * @return self
     */
    public function setDate4(DateTime $date4): self
    {
        $this->date4 = $date4;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate5(): DateTime
    {
        return $this->date5;
    }

    /**
     * @param DateTime $date5
     *
     * @return self
     */
    public function setDate5(DateTime $date5): self
    {
        $this->date5 = $date5;
        return $this;
    }
}
