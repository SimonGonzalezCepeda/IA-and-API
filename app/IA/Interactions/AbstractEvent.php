<?php


namespace App;


abstract class AbstractEvent implements Events
{
    protected $startFlag = false;
    protected $endFlag = false;
    /**
     * @var Conversation
     */
    protected $conversations;
    /**
     * AbstractEvent constructor.
     * @param Conversation $conversation
     */
    public function __construct(Conversation $conversation)
    {
        $this->conversations = $conversation;
    }

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
        } else {
            if($this->checkCondition($condition))
                $this->start($this->conversations);
        }
    }

    /**
     * Function to check conditions.
     * @param Condition $condition
     * @return bool
     */
    private function checkCondition(Condition $condition)
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
     * @param Conversation $conversation
     */
    public function start(Conversation $conversation)
    {
        //TODO: Create a way to start conversations.
        $this->startFlag = true;
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

    }

    /**
     * @return mixed
     */
    public function result()
    {
        // TODO: Implement result() method.
    }


}