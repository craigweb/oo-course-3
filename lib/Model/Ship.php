<?php

/**
 * Class Ship: Model class (models something - like a ship)
 */
class Ship extends AbstractShip
{
    private $jediFactor = 0;

    private $underRepair;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return int
     */
    public function getJediFactor(): int
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor(int $jediFactor): void
    {
        $this->jediFactor = $jediFactor;
    }

    public function isFunctional() {
        return !$this->underRepair;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Empire';
    }
}