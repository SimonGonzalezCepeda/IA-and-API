<?php


namespace App;


use App\Exceptions\FunctionHasANullCondition;

/**
 * Class AbstractEvent
 * @package App
 */
abstract class AbstractEvent extends GameEvent
{
    /**
     * Its another word for event, this one refers to what will the actual event
     * should call or trigger. It can be a Event or a Conversation.
     * @var Startable array
     */
    protected $happening = [];

    /**
     * If what are you trying to start its a
     * @param Startable $happening
     * @param Condition $condition
     * @return $this
     */
    public function start(Startable $happening, Condition $condition = null)
    {
        if($condition != null) {
            $this->startFlag = true;
            return $happening->call($condition);
        }
        if($condition === null) {
            $this->startFlag = true;
            return $this;
        }
    }

    /**
     * This function its made to complete Startable contract:"every startable
     * must be callable". In this case, a in game events can have many others events,
     * that's why if an instance its call()ed it will trigger the listener.
     * @param Condition|null $condition
     * @return AbstractEvent
     * @throws FunctionHasANullCondition
     */
    public function call(Condition $condition = null)
    {
        //TODO; El paràmetre que paso genera un bucle infinit, he de buscar una forma de separar el call y el listener.
        if($condition != null)
            return $this->listener($condition);
        throw new FunctionHasANullCondition;
    }

    /**
     * To add an Event to the array.
     * @param Startable $happening
     */
    public function addEvent(Startable $happening)
    {
        $this->happening[] = $happening;
    }

    /**
     * To get all the Events in an array.
     * @return Startable
     */
    public function getAllEvents()
    {
        return $this->happening;
    }

    /**
     * To get one event only.
     * @param int $index
     * @return mixed
     */
    public function getOneEvent($index)
    {
        return $this->happening[$index];
    }
 }