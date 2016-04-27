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
     * @return mixed
     */
    public function start();
    /**
     * @return mixed
     */
    public function end();
    /**
     * @return mixed
     */
    public function result();
}