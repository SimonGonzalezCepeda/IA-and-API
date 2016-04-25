<?php


namespace App;


class Kawai extends Character
{

    /**
     * Kawai constructor.
     */
    public function __construct()
    {
        $this->egoist= 50;
        $this->altruist= 80;
        $this->superficial= 40;
        $this->romantic= 80;
        $this->sweet= 80;
        $this->rude= 20;
        $this->crazy= 50;
        $this->tranquil= 60;
        $this->simple= 70;
        $this->complex= 50;
        $this->funny8boring= 100;
        $this->positive8negative= 110;
        $this->rich8poor= 100;
        $this->comic= 20;
        $this->intelligence= 60;
        $this->proud= 35;
    }
}