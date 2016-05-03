<?php


namespace App;


/**
 * Interface Dialogs
 * @package App
 */
interface Dialog
{
    public function start();

    public function memorizeLine();

    public function end();

    public function interaction($choices);

    public function results();
}