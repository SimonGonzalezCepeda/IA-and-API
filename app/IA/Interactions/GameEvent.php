<?php


namespace App;


/**This class its meant to put tha basses of all kind of events in the game, they could be
 * Event inside the GAME or triggers and other actions that are events inside the CODE.
 * Class GameEvent
 * @package App
 */
abstract class GameEvent implements Event
{
    /**
     * The current name of the event.
     * @var string
     *
     */
    protected $name;
    /**This variable mark if the game has been started.
     * @var bool
     */
    protected $startFlag = false;

    /**This variable mark if the events has been completed.
     * @var bool
     */
    protected $endFlag = false;

    /**
     * This variable its meant to be used by any class that implements Startable. This
     * let us the posibility to use it for a condition or to call something from the start method.
     * @var Startable
     */
    protected $startable;

    /**
     * We listen if a condition has been acomplished. If the event its on going,
     * we will call end($condition) function in order to see if it ends. If not
     * we will see if the event can be started.
     * @param Condition $condition
     * @return mixed
     */
    public function listener(Condition $condition)
    {
        // TODO: Implement listener() method.
        if($this->itsOnGoing()) {
            $this->end($condition);
            return $this;
        }
        if($this->checkCondition($condition)) {
            $this->start($this->startable, $condition);
            return $this;
        }
        return null;
    }

    /**
     * Function to check conditions.
     * @param Condition $condition
     * @return bool
     */
    protected function checkCondition(Condition $condition)
    {
        if($condition->getComparator() == $condition->getValue())
            return true;
        return false;
    }

    /**
     * Getter that checks if the game started and is not finished.
     * @return bool
     */
    public function itsOnGoing()
    {
        if(!$this->endFlag)
            return $this->startFlag;
        return false;
    }

    /**
     * Getter that checks if the game has ended.
     * @return bool
     */
    public function itsDone()
    {
        if(!$this->startFlag)
            return $this->endFlag;
        return false;
    }

    /**
     * This function permit to end an Event with or without a condition. If it has a condition
     * it will check it, if not the event will be set finished.
     * @param $condition
     * @return $this
     */
    public function end(Condition $condition = null)
    {
        if($condition === null) {
            $this->endIt();
        }
        if($this->checkCondition($condition)) {
            $this->endIt();
        }
        return null;
    }

    /**
     * This function its meant only to end the event.
     * @return $this
     */
    private function endIt(){
        $this->endFlag = true;
        $this->startFlag = false;
        return $this;
    }

    /**
     * This function has the responsability to aplied the changes of every result in
     * the current game.
     * @param Character $character
     * @param $parameter
     * @param $value
     * @return mixed
     */
    public function result($character, $parameter, $value)
    {
        // TODO: Implement result() method.
        $character->comParameter($parameter, $value);

    }
}