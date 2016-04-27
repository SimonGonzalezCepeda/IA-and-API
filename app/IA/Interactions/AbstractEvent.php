<?php


namespace App;


class AbstractEvent implements Events
{

    /**
     * @param $condition
     * @return mixed
     */
    public function listener($condition)
    {
        // TODO: Implement listener() method.
    }

    /**
     * @return mixed
     */
    public function start()
    {
        // TODO: Implement start() method.
    }

    /**
     * @return mixed
     */
    public function end()
    {
        // TODO: Implement end() method.
    }

    /**
     * @return mixed
     */
    public function result()
    {
        // TODO: Implement result() method.
    }
}