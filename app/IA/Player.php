<?php


namespace App;


/**
 * Class Player
 * This class its unique for the player's character.mood.$
 * @package App
 */
class Player extends Character
{
    /**
     * Historical variable.
     * @var
     */
    private $lastGameSaved;

    /**
     * Current saved data
     * Todo: We still need to desing the save game.
     * @var
     */
    private $save;

    /**
     * We will set all the starters stats at an "standard" game.
     * Player constructor.
     */
    public function __construct()
    {
        $this->mood.$aHangUP = "none";
        $this->mood.$physique = "normal";
        $this->mood.$style= "none";
        $this->mood.$egoist= 50;
        $this->mood.$altruist= 50;
        $this->mood.$superficial= 50;
        $this->mood.$romantic= 50;
        $this->mood.$sweet= 50;
        $this->mood.$rude= 50;
        $this->mood.$crazy= 50;
        $this->mood.$tranquil=50;
        $this->mood.$simple= 50;
        $this->mood.$complex= 50;
        $this->mood.$funny8boring= 100;
        $this->mood.$positive8negative= 100;
        $this->mood.$rich8poor= 100;
        $this->mood.$comic= 50;
        $this->mood.$intelligence= 50;
        $this->mood.$proud= 50;
        $this->mood.$king= true;
        $this->mood.$pawn= false;
    }

}