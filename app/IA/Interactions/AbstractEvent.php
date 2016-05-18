<?php


namespace App;


abstract class AbstractEvent extends GameEvent
{
    /**
     * Its another word for event, this one refers to what will the actual event
     * should call or trigger. It can be a Event or a Conversation.
     * @var Startable array
     */
    protected $happening = [];

    /**
     * We need a condition in order to do the call, that can have a condition.
     * @param Startable $happening
     * @param Condition $condition
     * @return $this
     */
    public function start(Startable $happening, Condition $condition = null)
    {
        // TODO: Implement start() method.
        $this->startFlag = true;
        if($condition != null)
            return $happening->call($condition);
        if($condition === null)
            return $this;
    }

    /**
     * This function its made to complete Startable contract:"every startable
     * must be callable". In this case, a in game events can have many others events,
     * that's why if an instance its call()ed it will trigger the listener.
     * @param Condition|null $condition
     * @return mix
     * @throws CallableHasANullCondition
     */
    public function call(Condition $condition = null)
    {
        if($condition != null)
            return $this->listener($condition);
        throw new CallableHasANullCondition;
    }
 }