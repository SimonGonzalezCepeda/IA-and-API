<?php


namespace App;


/**
 * Class Character
 * This class its used as a parent for all the others.
 * @package App
 */
/**
 * Class Character
 * @package App
 */
abstract class Character
{
    /**
     * @var Mood
     * This will be used to load the atributes corresponding with the mood of a Character.
     */
    protected $mood;
    /** Name
     * This will be the name of the Character, it won't be able to be changed in the game by the user,
     * we must remember that in the game we don't use too often the name itself, it is reserved for a closed
     * relationship or to distinguish this Character for one with the same surname.
     * @var string
     */
    protected $name;
    /** Surname
     * This will be the surname of the current Character, it won't be able to be changed in teh game by the user,
     * we must remember that in the game we call first the surname, and its the common way to talk to them.
     * @var string
     */
    protected $surname;
    /** A Hang Up
     * A Hang Up its one important feature that we can play later in the game to make more content, it is usually
     * something physic and some times mental.
     * @var string
     */
    protected $aHangUP;
    /** Physique
     * This parameter its more useful for making the game easy to drive, we will use it to simplify the relationships
     * and other stuff.
     * @var string
     */
    protected $physique;
    /** Style
     * It defines the style of the character, and it will be easier to use this to make relationships easier. A style
     * could be a "gamer" or a "heavy".
     * @var
     */
    protected $style;
    /** Default Image
     * Its the normal pose that will be displayed with the character, everyone has its own.
     * @var
     */
    protected $defaultImage;
    /** Poses
     * This arrays will gathered all the current poses of the characters. The number will be fixed
     * TODO: For this pre-Alpha it will be 4
     * @var array
     */
    protected $poses;

    /** Height
     * Height is needed for narrative and some events.
     * @var float
     */
    protected $height;
    /** Weight
     * Weight is needed for narrative and some events.
     * @var float
     */
    protected $weight;

    /**
     * Character constructor.
     * @param Mood $mood
     */
    public function __construct(Mood $mood)
    {
        $this->mood = $mood;
    }

    // Setters

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name=null)
    {
        if($name==null)
            $this->name = $name;
        return $this;
    }

    /**
     * @param st
     * ring $surname
     * @return $this
     */
    public function setSurname($surname=null)
    {
        if($surname==null)
            $this->surname = $surname;
        return $this;
    }

    /**
     * @param string $aHangUP
     * @return $this
     */
    public function setAHangUP($aHangUP=null)
    {
        if($aHangUP==null)
            $this->aHangUP = $aHangUP;
        return $this;
    }

    /**
     * @param string $physique
     * @return $this
     */
    public function setPhysique($physique=null)
    {
        if($physique==null)
            $this->physique = $physique;
        return $this;
    }

    /**
     * @param mixed $style
     * @return $this
     */
    public function setStyle($style=null)
    {
       if($style==null)
            $this->style = $style;
        return $this;
    }

    /**
     * @param mixed $defaultImage
     * @return $this
     */
    public function setDefaultImage($defaultImage=null)
    {
        if($defaultImage==null)
            $this->defaultImage = $defaultImage;
        return $this;
    }

    /**
     * @param array $poses
     * @return $this
     */
    public function setPoses($poses=null)
    {
       if($poses==null)
            $this->poses = $poses;
        return $this;
    }

    /**
     * @param float $height
     * @return $this
     */
    public function setHeight($height=null)
    {
        if($height==null)
            $this->height = $height;
        return $this;
    }

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight=null)
    {
        if($weight==null)
            $this->weight = $weight;
        return $this;
    }
}