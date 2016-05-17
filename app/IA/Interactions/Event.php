<?php


namespace App;



/**
 * Interface Event
 * @package App
 */
interface Event
{
    /**
     * @param Condition $condition
     * @return mixed
     */
    public function listener(Condition $condition);

    /**
     * We need a condition in order to do call($condition) that its usually called
     * from this method.
     * @param Startable $startable
     * @param Condition $condition
     * @return
     */
    public function start(Startable $startable, Condition $condition = null);

    /**
     * This function has meant to end two type of events, one that is general and
     * the other not. General events end with a condition of time (in most cases)
     * And the others are just
     * @param $condition
     * @return
     */
    public function end(Condition $condition = null);

    /**
     * This function has the responsability to aplied the changes of every result in
     * the current game.
     * @param Character $character
     * @param $parameter
     * @param $value
     * @return mixed
     */
    public function result($character, $parameter, $value);
}