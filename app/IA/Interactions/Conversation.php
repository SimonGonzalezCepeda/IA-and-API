<?php


namespace App;

use App\Exceptions\FunctionHasANullCondition;
/**
 * Class Conversation
 * @package App
 */
class Conversation extends GameEvent implements Startable
{
    /**
     * @var array
     */
    private $dialogs = [];
    /**
     * @var string
     */
    private $topic;

    /**
     * Conversation constructor.
     * @param string $name
     * @param Dialog $dialog
     * @param string $topic
     * @internal param Dialogs $dialogs
     */
    public function __construct($name, Dialog $dialog, $topic)
    {
        if ($topic === null || $topic == null)
            $topic = "Default Topic";
        $this->topic = $topic;
        $this->dialogs[] = $dialog;
        $this->name = $name;
    }

    /**
     * To get all the dialogs.
     * @return Dialog
     */
    public function getAllDialogs()
    {
        return $this->dialogs;
    }

    /**
     * To get only one dialog using its index.
     * @param integer $index
     * @return mixed
     */
    public function getOneDialog($index)
    {
        return $this->dialogs[$index];
    }

    /**
     * To add a dialog to the current array,
     * @param Dialog $dialog
     * @internal param array $dialogs
     */
    public function addDialog(Dialog $dialog)
    {
        $this->dialogs[] = $dialog;
    }

    /**
     * In this case the second parameter can't be null and the Startable instance,
     * a dialeg.
     * @param Startable $dialog
     * @param Condition $condition
     * @return Dialog $dialog
     * @throws FunctionHasANullCondition
     */
    public function start(Startable $dialog, Condition $condition = null)
    {
        if($condition != null)
            if($dialog instanceof Dialog)
            {
                $this->startFlag = true;
                return $dialog->call($condition);
            }
        throw new FunctionHasANullCondition;
    }

    public function call(Condition $condition = null)
    {
        // TODO: Implement call() method.
    }
}

//$topic = "Love Declaration";
//$character = new Kakoi();
//$player = new Player();
//$dialog = new StandardDialog($character, $player);
//$conversation = new Conversation($dialog, $topic);
//$conversation->start();