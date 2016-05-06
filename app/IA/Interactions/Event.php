<?php


namespace App;



/**
 * Interface Events
 * @package App
 */
interface Events
{
    /**
     * @param Condition $condition
     * @return mixed
     */
    public function listener(Condition $condition);

    /**
     * @param Startable $startable
     */
    public function start(Startable $startable);

    /**
     * This function has meant to end two type of events, one that is general and
     * the other not. General events end with a condition of time (in most cases)
     * And the others are just
     * @param $condition
     * @return
     */
    public function end(Condition $condition = null);
    /**
     * @return mixed
     */
    public function result();
}