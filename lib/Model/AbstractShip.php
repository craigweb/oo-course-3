<?php

abstract class AbstractShip
{

    private $id;

    private $name;

    private $weaponPower = 0;

    private $strength = 0;

    abstract public function getJediFactor();

    abstract public function getType();

    abstract public function isFunctional();

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo 'Hello';
    }

    public function getName() {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false) {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
        else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }

    }

    public function doesGivenShipHaveMoreStrength($givenShip) {
        return $givenShip->strength > $this->strength;
    }

    public function setStrength($strength) {
        if (!is_numeric($strength)) {
            throw new Exception('Invalid strength passed ' . $strength);
        }

        $this->strength = $strength;
    }

    public function getStrength() {
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower(): int
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower(int $weaponPower): void
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}