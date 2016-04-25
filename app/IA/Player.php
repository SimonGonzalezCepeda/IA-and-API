<?php


namespace App;


/**
 * Class Player
 * This class its unique for the player's character.
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
        $this->aHangUP = "none";
        $this->physique = "normal";
        $this->style= "none";
        $this->egoist= 50;
        $this->altruist= 50;
        $this->superficial= 50;
        $this->romantic= 50;
        $this->sweet= 50;
        $this->rude= 50;
        $this->crazy= 50;
        $this->tranquil=50;
        $this->simple= 50;
        $this->complex= 50;
        $this->funny8boring= 100;
        $this->positive8negative= 100;
        $this->rich8poor= 100;
        $this->comic= 50;
        $this->intelligence= 50;
        $this->proud= 50;
        $this->king= true;
        $this->pawn= false;
    }

}