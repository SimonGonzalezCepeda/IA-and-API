<?php


namespace App;


class Conversation extends GameEvent implements Startable
{
    private $dialogs = [];
    private $topic;

    /**
     * Conversation constructor.
     * @param string $name
     * @param Dialog $dialog
     * @param string $topic
     * @internal param Dialogs $dialogs
     */
    public function __construct($name, Dialog $dialog, $topic)
    {
        if ($topic === null || $topic == null)
            $topic = "Default Topic";
        $this->topic = $topic;
        $this->dialogs = $dialog;
        $this->name = $name;
    }

    /**
     * @return Dialog
     */
    public function getDialogs()
    {
        return $this->dialogs;
    }

    /**
     * @param Dialog $dialog
     * @internal param array $dialogs
     */
    public function setDialogs(Dialog $dialog)
    {
        $this->dialogs = [$dialog];
    }

    /**
     * @param Startable $startable
     * @param Condition $condition
     */
    public function start(Startable $startable, Condition $condition = null)
    {
        // TODO: Implement start() method.
    }

    public function call(Condition $condition = null)
    {
        // TODO: Implement call() method.
    }
}

//$topic = "Love Declaration";
//$character = new Kakoi();
//$player = new Player();
//$dialog = new StandardDialog($character, $player);
//$conversation = new Conversation($dialog, $topic);
//$conversation->start();