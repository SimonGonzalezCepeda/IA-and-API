<?php


namespace App;


class Tsundere extends Character
{

    /**
     * Tsundere constructor.
     */
    public function __construct()
    {
        $this->mood.$egoist= 50;
        $this->mood.$altruist= 50;
        $this->mood.$superficial= 50;
        $this->mood.$romantic= 50;
        $this->mood.$sweet= 50;
        $this->mood.$rude= 50;
        $this->mood.$crazy= 50;
        $this->mood.$tranquil= 50;
        $this->mood.$simple= 50;
        $this->mood.$complex= 60;
        $this->mood.$funny8boring= 100;
        $this->mood.$positive8negative= 130;
        $this->mood.$rich8poor= 100;
        $this->mood.$comic= 50;
        $this->mood.$intelligence= 50;
        $this->mood.$proud= 50;
    }


}