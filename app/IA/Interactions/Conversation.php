<?php


namespace App;


class Conversation
{
    private $dialogs = [];
    private $topic;

    /**
     * Conversation constructor.
     * @param Dialog $dialog
     * @param string $topic
     * @internal param Dialogs $dialogs
     */
    public function __construct(Dialog $dialog, $topic)
    {
        if ($topic === null || $topic == null)
            $topic = "Default Topic";
        $this->topic = $topic;
        $this->dialogs = $dialog;
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
        $this->dialogs = $dialog;
    }

    /**
     * @param $condition
     * @return boolean
     */
    public function start($condition)
    {
        //TODO: Implement start().
        if($condition)
            return true;
        else
            return false;
    }

    /**
     * @param null $condition
     * @return boolean
     */
    public function end($condition=null)
    {
        if ($condition)
            return true;
        else
            return false;
    }
}