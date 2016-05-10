<?php


namespace App;


/**
 * Interface Dialogs
 * @package App
 */
interface Dialog
{
    public function memorizeLine();

    public function interaction($choices);
}