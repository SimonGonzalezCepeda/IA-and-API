<?php


namespace App;


abstract class AbstractEvent implements Events
{
    protected $startFlag = false;
    protected $endFlag = false;
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
            if($condition->getCondition() == $condition->getValue())
                $this->start($this->conversations);
        }
    }

    /**
     * Getter that checks if the game started and not finished.
     * @return bool
     */
    private function itsOnGoing()
    {
        if(!$this->endFlag)
            return $this->startFlag;
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
     * @param $condition
     */
    public function end(Condition $condition = null)
    {
        //TODO: Not finished
        if($condition === null) {
            $this->endFlag = true;
        } else {
            if($condition->getCondition() == $condition->getValue())
                $this->endFlag = true;
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