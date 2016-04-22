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
    private $name;
    /** Surname
     * This will be the surname of the current Character, it won't be able to be changed in teh game by the user,
     * we must remember that in the game we call first the surname, and its the common way to talk to them.
     * @var string
     */
    private $surname;
    /** A Hang Up
     * A Hang Up its one important feature that we can play later in the game to make more content, it is usually
     * something physic and some times mental.
     * @var string
     */
    private $aHangUP;
    /** Physique
     * This parameter its more useful for making the game easy to drive, we will use it to simplify the relationships
     * and other stuff.
     * @var string
     */
    private $physique;
    /** Style
     * It defines the style of the character, and it will be easier to use this to make relationships easier. A style
     * could be a "gamer" or a "heavy".
     * @var
     */
    private $style;
    /** Default Image
     * Its the normal pose that will be displayed with the character, everyone has its own.
     * @var
     */
    private $defaultImage;
    /** Poses
     * This arrays will gathered all the current poses of the characters. The number will be fixed
     * TODO: For this pre-Alpha it will be 4
     * @var array
     */
    private $poses;
    /** Egoist
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $egoist;
    /** Altruist
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $altruist;
    /** Superficial
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $superficial;
    /** Romantic
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $romantic;
    /** Sweet
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $sweet;
    /** Rude
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $rude;
    /** Crazy
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $crazy;
    /** Tranquil
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $tranquil;
    /** Simple
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $simple;
    /** Complex
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $complex;
    /** Funny & Boring
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $funny8boring;
    /** Positive & Negative
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $positive8negative;
    /** Rich & Poor
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $rich8poor;
    /** Complexed
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $complexed;
    /** Comic
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $comic;
    /** Intelligence
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $intelligence;
    /** Proud
     * This will be a measure to calculate compatibility with each character. Its measurable from 1 to 100.
     * @var int
     */
    private $proud;
    /** King
     * This will mark if this character its a King. Remember, Kings are characters associated with one or more
     * characters.
     * @var boolean
     */
    private $king;
    /** Pawn
     * This will mark if the character follow a King.
     * @var boolean
     */
    private $pawn;
    /** Height
     * Height is needed for narrative and some events.
     * @var float
     */
    private $height;
    /** Weight
     * Weight is needed for narrative and some events.
     * @var float
     */
    private $weight;
}