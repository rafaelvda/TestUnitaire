<?php

/**
 * Class Classe
 */
class Classe
{
    /**
     * @var Eleve[] $listeEleves une liste d'elèves
     */
    private $listeEleves ;
    /**
     * @var Professeur[] $listeProfesseurs une liste de professeurs
     */
    private $listeProfesseurs ;
    /**
     * @var Filiere $filiere une filiere ou une option
     */
    private $filiere ;

    /**
     * Classe constructor.
     * @param $listeEleves
     * @param $listeProfesseurs
     * @param $filiere
     */
    public function __construct($filiere,$listeEleves=null, $listeProfesseurs=null )
    {
        if ($listeEleves==null)
            $this->listeEleves = array();
        else  $this->listeEleves =$listeEleves ;

        if ($listeProfesseurs == null)
            $this->listeProfesseurs = array() ;
            else
        $this->listeProfesseurs = $listeProfesseurs;
        $this->filiere = $filiere;
    }

    /**
     * @return mixed
     */
    public function getListeEleves()
    {
        return $this->listeEleves;
    }

    /**
     * @param mixed $listeEleves
     */
    public function setListeEleves($listeEleves)
    {
        $this->listeEleves = $listeEleves;
    }

    /**
     * @return mixed
     */
    public function getListeProfesseurs()
    {
        return $this->listeProfesseurs;
    }

    /**
     * @param mixed $listeProfesseurs
     */
    public function setListeProfesseurs($listeProfesseurs)
    {
        $this->listeProfesseurs = $listeProfesseurs;
    }

    /**
     * @return mixed
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * @param mixed $filiere
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;
    }

    public function listePassagersClandestins()
    {
        // code à écrire pour retourner la liste des élèves
		// qui ne sont pas dans la bonne Classe
		
        return array() ;
    }



}