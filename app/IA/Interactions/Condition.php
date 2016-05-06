<?php


namespace App;


/**
 * Class Condition
 * @package App
 */
class Condition implements Startable
{
    /**
     * This variable can be almost any parameter of the game, it could be the day, a week
     * in particular, a status from the player or the relationship of both Characters.
     * @var
     */
    private $condition;
    /**
     * This is the actual value that you will ask for it to something to start()
     * or to end($condition). Remember that start() and end($condition) function
     * its in almost every "event" (it can be a dialog, a conversation or an
     * actual event) that has a listener.
     * @var
     */
    private $value;

    public function One($condition, $value)
    {
        $oneCondition = new Condition;
        $this->value = $value;
        $this->condition = $condition;
        return $oneCondition;
    }

    public function Multiple()
    {
        $this->condition = [];
    }

    /**
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}