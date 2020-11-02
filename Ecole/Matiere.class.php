<?php

/**
 * Class Matiere
 */
class Matiere {
    /**
     * @var string $matiere nom de la matiere enseignée
     */
    private $matiere ;
    /**
     * @var int $nbHeures nom de la matière enseignée
     */
    private $nbHeures ;

    /**
     * Matiere constructor.
     * @param string $matiere le nom de la matiere enseignée
     * @param int $nbHeures le nombre heures
     */
    public function __construct($matiere, $nbHeures)
    {
        $this->matiere = $matiere;
        $this->nbHeures = $nbHeures;
    }

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param mixed $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    /**
     * @return mixed
     */
    public function getNbHeures()
    {
        return $this->nbHeures;
    }

    /**
     * @param mixed $nbHeures
     */
    public function setNbHeures($nbHeures)
    {
        $this->nbHeures = $nbHeures;
    }




}