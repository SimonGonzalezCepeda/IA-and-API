<?php


namespace App\Exceptions;



class CallableHasANullCondition extends \Exception
{
    public function report()
    {
        echo "The condition of this call() method is null and has to have one.";
    }
}