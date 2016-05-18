<?php


namespace App;

/**
 * This is an Event that usually is ralated to social compromises and festivities.
 * Class SocialEvent
 * @package App
 */
class SocialEvent extends AbstractEvent implements Startable
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
        $this->happening[] = $happening;
        $this->name = $name;
    }
}