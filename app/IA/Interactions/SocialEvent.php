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
     * @param Startable $happening
     */
    public function start(Startable $happening)
    {
        // TODO: Implement start() method.
        $this->startFlag = true;
    }
}