<?php


namespace App;


class Kawai extends Character
{

    /**
     * Kawai constructor.
     */
    public function __construct()
    {
        $this->mood.$egoist= 50;
        $this->mood.$altruist= 80;
        $this->mood.$superficial= 40;
        $this->mood.$romantic= 80;
        $this->mood.$sweet= 80;
        $this->mood.$rude= 20;
        $this->mood.$crazy= 50;
        $this->mood.$tranquil= 60;
        $this->mood.$simple= 70;
        $this->mood.$complex= 50;
        $this->mood.$funny8boring= 100;
        $this->mood.$positive8negative= 110;
        $this->mood.$rich8poor= 100;
        $this->mood.$comic= 20;
        $this->mood.$intelligence= 60;
        $this->mood.$proud= 35;
    }
}