<?php


namespace App;


class Sport extends Character
{

    /**
     * Sport constructor.
     */
    public function __construct()
    {
        $this->mood.$egoist= 70;
        $this->mood.$altruist= 55;
        $this->mood.$superficial= 50;
        $this->mood.$romantic= 30;
        $this->mood.$sweet= 50;
        $this->mood.$rude= 65;
        $this->mood.$crazy= 60;
        $this->mood.$tranquil= 40;
        $this->mood.$simple= 80;
        $this->mood.$complex= 20;
        $this->mood.$funny8boring= 100;
        $this->mood.$positive8negative= 70;
        $this->mood.$rich8poor= 100;
        $this->mood.$comic= 60;
        $this->mood.$intelligence= 30;
        $this->mood.$proud= 75;
    }
}