<?php


namespace App;


/**
 * Interface Dialogs
 * @package App
 */
interface Dialog
{
    public function interaction($choices);

    public function results();
}