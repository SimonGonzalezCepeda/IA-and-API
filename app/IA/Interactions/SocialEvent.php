<?php


namespace App;


/**
 * This is an Event that usually is ralated to social compromises and festivities.
 * Class SocialEvent
 * @package App
 */
class SocialEvent extends GameEvent implements Startable
{
    /**
     * The date that the event should start.
     * @var
     */
    private $initialDate;
    /**
     * The date that the event should finish.
     * @var
     */
    private $finalDate;
    /**
     * Its another word for event, this one refers to what will the actual event
     * should call or trigger. It can be a Event or a Conversation.
     * @var Startable
     */
    private $happening;

    /**
     * SocialEvent constructor.
     * @param string $name
     * @param $initialDate
     * @param $finalDate
     * @param Startable $happening
     */
    public function __construct($name, $initialDate, $finalDate, Startable $happening)
    {
        $this->initialDate = $initialDate;
        $this->finalDate = $finalDate;
        $this->happening = $happening;
        $this->name = $name;
    }

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
     * must be callable". In this case, a SocialEvent can have many others socials
     * events, that's why if an instance its call()ed it will trigger the listener.
     * @param Condition|null $condition
     * @return mix
     */
    public function call(Condition $condition = null)
    {
        if($condition === null)
            return $this->listener($condition);
        return $exception = CallableNullConditionException::class;
    }
}