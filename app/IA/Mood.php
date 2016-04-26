<?php


namespace App;


abstract class Mood
{
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
    /**
     * @param int $egoist
     * @return $this
     */
    public function comEgoist($egoist=null)
    {
        if ($egoist===null)
            $this->egoist = $egoist;
        return $this;
    }
    /**
     * @param int $altruist
     * @return $this
     */
    public function comAltruist($altruist=null)
    {
        if ($altruist===null)
            $this->altruist = $altruist;
        return $this;
    }
    /**
     * @param int $superficial
     * @return $this
     */
    public function comSuperficial($superficial=null)
    {
        if($superficial===null)
            $this->superficial = $superficial;
        return $this;
    }
    /**
     * @param int $romantic
     * @return $this
     */
    public function comRomantic($romantic=null)
    {
        if($romantic===null)
            $this->romantic = $romantic;
        return $this;
    }
    /**
     * @param int $sweet
     * @return $this
     */
    public function comSweet($sweet=null)
    {
        if($sweet===null)
            $this->sweet = $sweet;
        return $this;
    }
    /**
     * @param int $rude
     * @return $this
     */
    public function comRude($rude=null)
    {
        if($rude===null)
            $this->rude = $rude;
        return $this;
    }
    /**
     * @param int $crazy
     * @return $this
     */
    public function comCrazy($crazy=null)
    {
        if($crazy===null)
            $this->crazy = $crazy;
        return $this;
    }
    /**
     * @param int $tranquil
     * @return $this
     */
    public function comTranquil($tranquil=null)
    {
        if($tranquil===null)
            $this->tranquil = $tranquil;
        return $this;
    }
    /**
     * @param int $simple
     * @return $this
     */
    public function comSimple($simple=null)
    {
        if($simple===null)
            $this->simple = $simple;
        return $this;
    }
    /**
     * @param int $complex
     * @return $this
     */
    public function comComplex($complex=null)
    {
        if($complex===null)
            $this->complex = $complex;
        return $this;
    }
    /**
     * @param int $funny8boring
     * @return $this
     */
    public function comFunny8boring($funny8boring=null)
    {
        if($funny8boring===null)
            $this->funny8boring = $funny8boring;
        return $this;
    }
    /**
     * @param int $positive8negative
     * @return $this
     */
    public function comPositive8negative($positive8negative=null)
    {
        if($positive8negative===null)
            $this->positive8negative = $positive8negative;
        return $this;
    }
    /**
     * @param int $rich8poor
     * @return $this
     */
    public function comRich8poor($rich8poor=null)
    {
        if($rich8poor===null)
            $this->rich8poor = $rich8poor;
        return $this;
    }
    /**
     * @param int $comic
     * @return $this
     */
    public function comComic($comic=null)
    {
        if($comic===null)
            $this->comic = $comic;
        return $this;
    }
    /**
     * @param int $intelligence
     * @return $this
     */
    public function comIntelligence($intelligence=null)
    {
        if($intelligence===null)
            $this->intelligence = $intelligence;
        return $this;
    }
    /**
     * @param int $proud
     * @return $this
     */
    public function comProud($proud=null)
    {
        if($proud===null)
            $this->proud = $proud;
        return $this;
    }
    /**
     * @param boolean $king
     * @return $this
     */
    public function comKing($king=null)
    {
        if($king==null)
            $this->king = $king;
        return $this;
    }
    /**
     * @param boolean $pawn
     * @return $this
     */
    public function comPawn($pawn=null)
    {
        if($pawn==null)
            $this->pawn = $pawn;
        return $this;
    }
}