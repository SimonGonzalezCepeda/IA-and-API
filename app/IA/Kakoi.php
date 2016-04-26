<?php


namespace App;


class Kakoi extends Character
{

    /**
     * Kakoi constructor.
     */
    public function __construct()
    {
        $this->mood.$egoist= 60;
        $this->mood.$altruist= 35;
        $this->mood.$superficial= 65;
        $this->mood.$romantic= 60;
        $this->mood.$sweet= 50;
        $this->mood.$rude= 40;
        $this->mood.$crazy= 50;
        $this->mood.$tranquil= 60;
        $this->mood.$simple= 50;
        $this->mood.$complex= 50;
        $this->mood.$funny8boring= 90;
        $this->mood.$positive8negative= 110;
        $this->mood.$rich8poor= 100;
        $this->mood.$comic= 40;
        $this->mood.$intelligence= 60;
        $this->mood.$proud= 70;
    }
}