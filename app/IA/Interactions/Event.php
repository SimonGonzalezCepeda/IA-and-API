<?php


namespace App;



/**
 * Interface Events
 * @package App
 */
interface Events
{
    /**
     * @param $condition
     * @return mixed
     */
    public function listener($condition);
    /**
     * @return boolean
     */
    public function start();
    /**
     * @return boolean
     */
    public function end();
    /**
     * @return mixed
     */
    public function result();
}