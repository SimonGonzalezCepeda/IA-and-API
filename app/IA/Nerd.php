<?php


namespace App;


class Nerd extends Character
{

    /**
     * Nerd constructor.
     */
    public function __construct()
    {
        $this->mood.$egoist= 60;
        $this->mood.$altruist= 40;
        $this->mood.$superficial= 45;
        $this->mood.$romantic= 40;
        $this->mood.$sweet= 30;
        $this->mood.$rude= 60;
        $this->mood.$crazy= 20;
        $this->mood.$tranquil= 75;
        $this->mood.$simple= 40;
        $this->mood.$complex= 70;
        $this->mood.$funny8boring= 125;
        $this->mood.$positive8negative= 110;
        $this->mood.$rich8poor= 100;
        $this->mood.$comic= 20;
        $this->mood.$intelligence= 80;
        $this->mood.$proud= 70;
    }


}