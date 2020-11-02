<?php


class Option extends Filiere
{
    private $option ;
    private $nbHeuresSpecialite ;

    /**
     * Option constructor.
     * @param $option
     * @param $nbHeuresSpecialite
     */
    public function __construct($filiere,$diplome,$taille,$option, $nbHeuresSpecialite)
    {
        parent::__construct($filiere,$diplome,$taille) ;
        $this->option = $option;
        $this->nbHeuresSpecialite = $nbHeuresSpecialite;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    /**
     * @return mixed
     */
    public function getNbHeuresSpecialite()
    {
        return $this->nbHeuresSpecialite;
    }

    /**
     * @param mixed $nbHeuresSpecialite
     */
    public function setNbHeuresSpecialite($nbHeuresSpecialite)
    {
        $this->nbHeuresSpecialite = $nbHeuresSpecialite;
    }




}