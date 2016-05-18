<?php


namespace App\Exceptions;



class FunctionHasANullCondition extends \Exception
{
    public function report()
    {
        echo "The condition of this function method is null and has to have one.";
    }
}