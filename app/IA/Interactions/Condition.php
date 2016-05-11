<?php


namespace App;


/**
 * This class exist only to make condition for listeners and events.
 * Class Condition
 * @package App
 */
class Condition implements Startable
{
    /**
     * This variable can be almost any parameter of the game, it could be the day, a week
     * in particular, a status from the player or the relationship of both Characters.
     * This parameter must be one taken from the actual object comparative.
     * @var
     */
    private $comparator;
    /**
     * This is the actual value that you will ask for it to something to start()
     * or to end($condition). Remember that start() and end($condition) function
     * its in almost every "event" (it can be a dialog, a conversation or an
     * actual event) that has a listener.
     * @var mixed
     */
    private $value;

    /**
     * This constructor has been made to make one Simple condition.
     * @param $comparator
     * @param $value
     * @return Condition
     */
    public function Simple($comparator, $value)
    {
        $simpleCondition = new Condition;
        $simpleCondition->value = $value;
        $simpleCondition->comparator = $comparator;
        return $simpleCondition;
    }

    /**
     * This constructor has been made to make multiple conditions and put it into
     * one object.
     * @param array $comparator
     * @param array $value
     * @return Condition
     */
    public function Multiple(array $comparator, array $value)
    {
        $multipleCondition = new Condition;
        $multipleCondition->comparator = $comparator;
        $multipleCondition->value = $value;
        return $multipleCondition;
    }

    /**
     * Return the value to compare with, this value its the actual value of
     * an object.
     * @return mixed
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Return the value that we wish to achive so the current condition can be
     * acomplished.
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}