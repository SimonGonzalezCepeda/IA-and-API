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

    //TODO: I need to refactor this class.

 }