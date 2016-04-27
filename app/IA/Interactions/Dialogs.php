<?php


namespace App;


/**
 * Interface Dialogs
 * @package App
 */
interface Dialogs
{
    /**
     * @return mixed
     */
    public function start();
    /**
     * @return mixed
     */
    public function end();
}