<?php


namespace App;


abstract class AbstractEvent extends GameEvent
{

    /**
     * @var Conversation
     */
    protected $conversations;
    /**
     * AbstractEvent constructor.
     * @param Conversation $conversation
     */
    public function __construct(Conversation $conversation)
    {
        $this->conversations = $conversation;
    }

    /**
     * @return mixed
     */
    public function result()
    {
        // TODO: Implement result() method.
    }


}