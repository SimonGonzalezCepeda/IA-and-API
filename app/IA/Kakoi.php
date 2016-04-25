<?php


namespace App;


class Kakoi extends Character
{

    /**
     * Kakoi constructor.
     */
    public function __construct()
    {
        $this->egoist= 60;
        $this->altruist= 35;
        $this->superficial= 65;
        $this->romantic= 60;
        $this->sweet= 50;
        $this->rude= 40;
        $this->crazy= 50;
        $this->tranquil= 60;
        $this->simple= 50;
        $this->complex= 50;
        $this->funny8boring= 90;
        $this->positive8negative= 110;
        $this->rich8poor= 100;
        $this->comic= 40;
        $this->intelligence= 60;
        $this->proud= 70;
    }
}