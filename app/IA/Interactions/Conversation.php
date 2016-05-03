<?php


namespace App;


class Conversation
{
    private $dialogs = [];
    private $topic;

    /**
     * Conversation constructor.
     * @param Dialogs $dialog
     * @param string $topic
     * @internal param Dialogs $dialogs
     */
    public function __construct(Dialogs $dialog, $topic)
    {
        if ($topic === null || $topic == null)
            $topic = "Default Topic";
        $this->topic = $topic;
        $this->dialogs = $dialog;
    }

    /**
     * @return Dialogs
     */
    public function getDialogs()
    {
        return $this->dialogs;
    }

    /**
     * @param Dialogs $dialog
     * @internal param array $dialogs
     */
    public function setDialogs(Dialogs $dialog)
    {
        $this->dialogs = $dialog;
    }

}