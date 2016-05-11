<?php


namespace App;


class StandardDialog extends AbstractDialog implements Startable
{

    /**
     * StandardDialog constructor.
     * @param Character $character
     * @param Player $player
     */
    public function __construct(Character $character, Player $player)
    {
        $this->transmiter = $character;
        $this->receiver = $player;
    }
}