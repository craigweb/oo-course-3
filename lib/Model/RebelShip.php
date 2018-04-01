<?php

class RebelShip extends Ship
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

    /**
     * @return string
     */
    public function getType()
    {
        return 'Rebel';
    }
}