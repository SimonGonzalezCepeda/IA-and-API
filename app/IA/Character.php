<?php


namespace App;


/**
 * Class Character
 * This class its used as a parent for all the others.
 * @package App
 */
abstract class Character
{
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
    /** Egoist
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $egoist;
    /** Altruist
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $altruist;
    /** Superficial
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $superficial;
    /** Romantic
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $romantic;
    /** Sweet
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $sweet;
    /** Rude
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $rude;
    /** Crazy
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $crazy;
    /** Tranquil
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $tranquil;
    /** Simple
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $simple;
    /** Complex
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $complex;
    /** Funny & Boring
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $funny8boring;
    /** Positive & Negative
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 200.
     * @var int
     */
    protected $positive8negative;
    /** Rich & Poor
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 200.
     * @var int
     */
    protected $rich8poor;
    /** Complexed
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 200.
     * @var int
     */
    protected $comic;
    /** Intelligence
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $intelligence;
    /** Proud
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    protected $proud;
    /** King
     * This will mark if this character its a King. Remember, Kings are characters associated with one or more
     * characters.
     * @var boolean
     */
    protected $king;
    /** Pawn
     * This will mark if the character follow a King.
     * @var boolean
     */
    protected $pawn;
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

    // Setters

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @param string $aHangUP
     */
    public function setAHangUP($aHangUP)
    {
        $this->aHangUP = $aHangUP;
    }

    /**
     * @param string $physique
     */
    public function setPhysique($physique)
    {
        $this->physique = $physique;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * @param mixed $defaultImage
     */
    public function setDefaultImage($defaultImage)
    {
        $this->defaultImage = $defaultImage;
    }

    /**
     * @param array $poses
     */
    public function setPoses($poses)
    {
        $this->poses = $poses;
    }

    /**
     * @param int $egoist
     */
    public function setEgoist($egoist)
    {
        $this->egoist = $egoist;
    }

    /**
     * @param int $altruist
     */
    public function setAltruist($altruist)
    {
        $this->altruist = $altruist;
    }

    /**
     * @param int $superficial
     */
    public function setSuperficial($superficial)
    {
        $this->superficial = $superficial;
    }

    /**
     * @param int $romantic
     */
    public function setRomantic($romantic)
    {
        $this->romantic = $romantic;
    }

    /**
     * @param int $sweet
     */
    public function setSweet($sweet)
    {
        $this->sweet = $sweet;
    }

    /**
     * @param int $rude
     */
    public function setRude($rude)
    {
        $this->rude = $rude;
    }

    /**
     * @param int $crazy
     */
    public function setCrazy($crazy)
    {
        $this->crazy = $crazy;
    }

    /**
     * @param int $tranquil
     */
    public function setTranquil($tranquil)
    {
        $this->tranquil = $tranquil;
    }

    /**
     * @param int $simple
     */
    public function setSimple($simple)
    {
        $this->simple = $simple;
    }

    /**
     * @param int $complex
     */
    public function setComplex($complex)
    {
        $this->complex = $complex;
    }

    /**
     * @param int $funny8boring
     */
    public function setFunny8boring($funny8boring)
    {
        $this->funny8boring = $funny8boring;
    }

    /**
     * @param int $positive8negative
     */
    public function setPositive8negative($positive8negative)
    {
        $this->positive8negative = $positive8negative;
    }

    /**
     * @param int $rich8poor
     */
    public function setRich8poor($rich8poor)
    {
        $this->rich8poor = $rich8poor;
    }

    /**
     * @param int $comic
     */
    public function setComic($comic)
    {
        $this->comic = $comic;
    }

    /**
     * @param int $intelligence
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @param int $proud
     */
    public function setProud($proud)
    {
        $this->proud = $proud;
    }

    /**
     * @param boolean $king
     */
    public function setKing($king)
    {
        $this->king = $king;
    }

    /**
     * @param boolean $pawn
     */
    public function setPawn($pawn)
    {
        $this->pawn = $pawn;
    }

    /**
     * @param float $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    // Getters

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getAHangUP()
    {
        return $this->aHangUP;
    }

    /**
     * @return string
     */
    public function getPhysique()
    {
        return $this->physique;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @return mixed
     */
    public function getDefaultImage()
    {
        return $this->defaultImage;
    }

    /**
     * @return array
     */
    public function getPoses()
    {
        return $this->poses;
    }

    /**
     * @return int
     */
    public function getEgoist()
    {
        return $this->egoist;
    }

    /**
     * @return int
     */
    public function getAltruist()
    {
        return $this->altruist;
    }

    /**
     * @return int
     */
    public function getSuperficial()
    {
        return $this->superficial;
    }

    /**
     * @return int
     */
    public function getRomantic()
    {
        return $this->romantic;
    }

    /**
     * @return int
     */
    public function getSweet()
    {
        return $this->sweet;
    }

    /**
     * @return int
     */
    public function getRude()
    {
        return $this->rude;
    }

    /**
     * @return int
     */
    public function getCrazy()
    {
        return $this->crazy;
    }

    /**
     * @return int
     */
    public function getTranquil()
    {
        return $this->tranquil;
    }

    /**
     * @return int
     */
    public function getSimple()
    {
        return $this->simple;
    }

    /**
     * @return int
     */
    public function getComplex()
    {
        return $this->complex;
    }

    /**
     * @return int
     */
    public function getFunny8boring()
    {
        return $this->funny8boring;
    }

    /**
     * @return int
     */
    public function getPositive8negative()
    {
        return $this->positive8negative;
    }

    /**
     * @return int
     */
    public function getRich8poor()
    {
        return $this->rich8poor;
    }

    /**
     * @return int
     */
    public function getComic()
    {
        return $this->comic;
    }

    /**
     * @return int
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * @return int
     */
    public function getProud()
    {
        return $this->proud;
    }

    /**
     * @return boolean
     */
    public function isKing()
    {
        return $this->king;
    }

    /**
     * @return boolean
     */
    public function isPawn()
    {
        return $this->pawn;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }
}