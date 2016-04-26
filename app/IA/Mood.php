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
}