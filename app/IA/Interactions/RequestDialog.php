<?php


namespace App;


class RequestDialog extends AbstractDialog
{
    /**
     * RequestDialog constructor.
     * @param Player $player
     * @param Character $character
     */
    public function __construct(Player $player, Character $character)
    {
        $this->transmiter = $player;
        $this->receiver = $character;
    }

    public function call(Condition $condition = null)
    {
        // TODO: Implement call() method.
    }
}