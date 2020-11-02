<?php


/**
 * Class Note
 */
class Note
{
    /**
     * @var
     * la note brute sans coefficient ni bonus
     */
    private $noteBase ;

    /**
     * @var
     * le coefficient associé à la note
     */
    private $coefficient ;

    /**
     * @var
     * le petit bonus éventuel
     */
    private $bonus;

    /**
     * Note constructor.
     * @param $noteBase
     * @param $coefficient
     * @param $bonus
     */
    public function __construct($noteBase,$coefficient,$bonus=0)
    {
        $this->noteBase = $noteBase;
        $this->coefficient = $coefficient;
        $this->bonus = $bonus;
    }

    /**
     * @return mixed
     */
    public function getNoteBase()
    {
        return $this->noteBase;
    }

    /**
     * @param mixed $noteBase
     */
    public function setNoteBase($noteBase)
    {
        $this->noteBase = $noteBase;
    }

    /**
     * @return mixed
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * @param mixed $bonus
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }

    /**
     * @return mixed
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * @param mixed $coefficient
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
    }

    /**
     * @return float|int renvoie la valeur totale obtenue en tenant compte du petit bonus et du coefficient
     */
    public function noteTotale(){
        return ($this->getNoteBase()+ $this->getBonus())*$this->getCoefficient() ;
    }


}