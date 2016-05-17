<?php
/**
 * Created by PhpStorm.
 * User: sylver
 * Date: 6/05/16
 * Time: 17:10
 */

namespace App;


/**
 * This is an interface to make some objects be able to start a function. It's empty.
 * Interface Startable
 * @package App
 */
interface Startable
{
    /**
     * Every Startable must be callable, that's why we force to have this method.
     * The condition can be null and the objective of this function its to call, subsequent,
     * content.
     * @param Condition|null $condition
     * @return mixed
     */
    public function call(Condition $condition = null);
}