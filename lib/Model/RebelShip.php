<?php

class RebelShip extends AbstractShip
{
    public function getFavouriteJedi()
    {
        $coolJedis = array('Yoda', 'Obiwan', 'Anakin', 'Luke');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    /**
     * @return bool
     */
    public function isFunctional() {
        return true;
    }


    public function getNameAndSpecs($useShortFormat = false)
    {

        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Rebel)';

        return $val;

    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Rebel';
    }

    public function getJediFactor()
    {
        return rand(10, 30);
    }
}