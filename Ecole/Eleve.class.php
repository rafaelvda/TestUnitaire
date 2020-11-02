<?php

/**
 * Class Eleve
 */
class Eleve {
    /**
     * @var string $nom le nom de l'étudiant
     */
    private $nom ;
    /**
     * @var string $prenom le prénom de l'étudiant
     */
    private $prenom ;
    /**
     * @var Filiere $filiere la filiere de l'étudiant (ou l'option si la filiere est à option)
     */
    private $filiere ;
    /**
     * @var Evaluation $lesEvaluations tableau d'évaluations
     */
    private $lesEvaluations ;

    /**
     * Eleve constructor.
     * @param $nom
     * @param $prenom
     * @param $filiere
     * @param $lesEvaluations
     */
    public function __construct($nom, $prenom, $filiere, $lesEvaluations=null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->filiere = $filiere;
        if ($lesEvaluations==null)
        $this->lesEvaluations = array();
        else
            $this->lesEvaluations = $lesEvaluations ;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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

    /**
     * @return mixed
     */
    public function getLesEvaluations()
    {
        return $this->lesEvaluations;
    }

    /**
     * @param mixed $lesEvaluations
     */
    public function setLesEvaluations($lesEvaluations)
    {
        $this->lesEvaluations = $lesEvaluations;
    }

    public function moyenneGenerale() {
        $moyenneGenerale = 0 ;
        return $moyenneGenerale ;
    }



}