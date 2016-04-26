<?php


namespace App;


class Funny extends Character
{

    /**
     * Funny constructor.
     */
    public function __construct()
    {
        $this->mood.$egoist= 30;
        $this->mood.$altruist= 70;
        $this->mood.$superficial= 50;
        $this->mood.$romantic= 50;
        $this->mood.$sweet= 40;
        $this->mood.$rude= 60;
        $this->mood.$crazy= 70;
        $this->mood.$tranquil= 35;
        $this->mood.$simple= 80;
        $this->mood.$complex= 50;
        $this->mood.$funny8boring= 75;
        $this->mood.$positive8negative= 80;
        $this->mood.$rich8poor= 100;
        $this->mood.$comic= 80;
        $this->mood.$intelligence= 50;
        $this->mood.$proud= 40;
    }
}