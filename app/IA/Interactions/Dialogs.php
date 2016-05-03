<?php


namespace App;


/**
 * Interface Dialogs
 * @package App
 */
interface Dialogs
{
    /**
     * @param $condition
     * @return boolean
     */
    public function start($condition);

    /**
     * @param null $condition
     * @return boolean
     */
    public function end($condition=null);

    public function interaction($choices);

    public function results();
}