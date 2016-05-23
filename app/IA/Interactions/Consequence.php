<?php


namespace App;


class Consequence
{
    protected $experience = [];
    protected $result = [];

    /**
     * Consequence constructor.
     * @param $value
     * @param $parameter
     */
    public function __construct($parameter, $value)
    {
        $this->experience = [$parameter => $value];
        $this->result = [$this->experience];
    }

    public function addExperience($parameter, $value)
    {
        $this->experience = [$parameter => $value];
        $this->result = [$this->experience];
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getExperience($index)
    {
        return $this->result[$index];
    }
}