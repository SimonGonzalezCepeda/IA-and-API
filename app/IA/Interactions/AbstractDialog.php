<?php


namespace App;


/**
 * Class AbstractDialog
 * @package App
 */
/**
 * Class AbstractDialog
 * @package App
 */
abstract class AbstractDialog implements Dialog
{
    /**
     * @var Character
     */
    protected $transmiter;
    /**
     * @var Character
     */
    protected $receiver;
    /**
     * @var Character
     */
    protected $commentators = [];
    /**
     * Used to controls and maybe a trophy system in the future.
     * @var bool
     */
    protected $endFlag = false;
    /**
     * Used to controls and maybe a trophy system in the future.
     * @var bool
     */
    protected $startedFlag = false;
    /**
     * This will be the file that will be loaded.
     * @var
     */
    protected $content;

    /**
     * AbstractDialog constructor.
     * @param Character $receiver
     * @param Character $transmiter
     * @param $content
     */
    public function __construct(Character $receiver, Character $transmiter, $content)
    {
        $this->receiver = $receiver;
        $this->transmiter = $transmiter;
        $this->content = $content;
    }
    /**
     * @param Character $transmiter
     * @return $this
     */
    public function comTransmiter($transmiter = null)
    {
        if($transmiter === null) {
            $this->transmiter = $transmiter;
        }
        return $this;
    }
    /**
     * @param Character $receiver
     * @return $this
     */
    public function comReceiver($receiver = null)
    {
        if($receiver === null) {
            $this->receiver = $receiver;
        }
        return $this;
    }
    /**
     * @param Character $commentators
     * @return $this
     */
    public function comCommentators($commentators = null)
    {
        if($commentators === null) {
            $this->commentators = $commentators;
        }
        return $this;
    }
    /**
     * @param array $choices
     */
    public function interaction($choices)
    {
        // TODO: Implement interaction() method.
    }
    /**
     * @return mixes
     */
    public function results()
    {
        // TODO: Implement results() method.
    }

    /**
     *  A method to indicate that its over the dialeg.
     */
    public function end()
    {
        $this->endFlag = true;
    }

    /**
     *  A method to indicate that the dialeg started,
     */
    public function start()
    {
        $this->startedFlag = true;
    }

    /**
     *  A method called to save the current point on the dialeg. Maybe refaction sooner.
     */
    public function memorizeLine()
    {
        if($this->startedFlag){
            //TODO: Codi per a desar el dialog que portem llegit.
        }
    }
}