<?php


namespace App;


class GameEvent implements Events
{
    protected $startFlag = false;
    protected $endFlag = false;
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
            $this->start($this->conversations);
            return $this;
        }
    }

    /**
     * Function to check conditions.
     * @param Condition $condition
     * @return bool
     */
    protected function checkCondition(Condition $condition)
    {
        if($condition->getCondition() == $condition->getValue())
            return true;
        return false;
    }

    /**
     * Getter that checks if the game started and not finished.
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
     * Mark if the event has started
     * @param Startable $startable
     */
    public function start(Startable $startable)
    {
        // TODO: Implement start() method.
    }

    /**
     * To avoid conflicts, we set the startFlag as false.
     * @param $condition
     * @return $this
     */
    public function end(Condition $condition = null)
    {
        //TODO: Not finished
        if($condition === null) {
            $this->endFlag = true;
            $this->startFlag = false;
            return $this;
        }
        if($this->checkCondition($condition)) {
            $this->endFlag = true;
            $this->startFlag = false;
            return $this;
        }
        return null;
    }

    /**
     * @return mixed
     */
    public function result()
    {
        // TODO: Implement result() method.
    }
}