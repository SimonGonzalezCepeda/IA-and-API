<?php


namespace App;


/**This event its usually related with a concrete Character
 * Class PersonalEvent
 * @package App
 */
class PersonalEvent extends AbstractEvent implements Startable
{
    /**
     * Here we save the character protagonist of these event.
     * @var Character
     */
    protected $character;

    /**
     * PersonalEvent constructor.
     * @param $name
     * @param $character
     * @param Startable $happening
     */
    public function __construct($name, $character, Startable $happening)
    {
        $this->name = $name;
        $this->character = $character;
        $this->happening[] = $happening;
    }
}