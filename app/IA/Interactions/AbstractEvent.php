<?php


namespace App;


class AbstractEvent implements Events
{
    protected $conversation;
    /**
     * AbstractEvent constructor.
     * @param Conversation $conversation
     */
    public function __construct(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }

    /**
     * @param $condition
     * @return mixed
     */
    public function listener($condition)
    {
        // TODO: Implement listener() method.
    }

    /**
     * @return boolean
     */
    public function start()
    {
        // TODO: Implement start() method.
        return false;
    }

    /**
     * @return boolean
     */
    public function end()
    {
        // TODO: Implement end() method.
        return false;
    }

    /**
     * @return mixed
     */
    public function result()
    {
        // TODO: Implement result() method.
    }
}