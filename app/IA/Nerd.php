<?php


namespace App;


class Nerd extends Character
{

    /**
     * Nerd constructor.
     */
    public function __construct()
    {
        $this->egoist= 60;
        $this->altruist= 40;
        $this->superficial= 45;
        $this->romantic= 40;
        $this->sweet= 30;
        $this->rude= 60;
        $this->crazy= 20;
        $this->tranquil= 75;
        $this->simple= 40;
        $this->complex= 70;
        $this->funny8boring= 125;
        $this->positive8negative= 110;
        $this->rich8poor= 100;
        $this->comic= 20;
        $this->intelligence= 80;
        $this->proud= 70;
    }


}