<?php

/**
 * Class Filiere
 */
class Filiere
{
    /**
     * @var string $filiere nom de la filiere par exemple SIO ou MUC
     */
    private $filiere ;
    /**
     * @var string $diplomeDelivre niveau de diplome délivé par exemple BTS
     */
    private $diplomeDelivre ;
    /**
     * @var int $taillePromotion taille totale de la promotion
     */
    private $taillePromotion ;

    /**
     * @return mixed
     */
    public function getListeMatieres()
    {
        return $this->listeMatieres;
    }

    /**
     * @param mixed $listeMatieres
     */
    public function setListeMatieres($listeMatieres)
    {
        $this->listeMatieres = $listeMatieres;
    }


    /**
     * @var
     */
    private $listeMatieres;

    /**
     * Filiere constructor.
     * @param $filiere
     * @param $diplomeDelivre
     * @param $taillePromotion
     */
    public function __construct($filiere, $diplomeDelivre, $taillePromotion, $listeMatieres=null)
    {
        $this->filiere = $filiere;
        $this->diplomeDelivre = $diplomeDelivre;
        $this->taillePromotion = $taillePromotion;
        if ($listeMatieres ==null)
            $this->listeMatieres = array();
        else $this->listeMatieres = $listeMatieres ;
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
    public function getDiplomeDelivre()
    {
        return $this->diplomeDelivre;
    }

    /**
     * @param mixed $diplomeDelivre
     */
    public function setDiplomeDelivre($diplomeDelivre)
    {
        $this->diplomeDelivre = $diplomeDelivre;
    }

    /**
     * @return mixed
     */
    public function getTaillePromotion()
    {
        return $this->taillePromotion;
    }

    /**
     * @param mixed $taillePromotion
     */
    public function setTaillePromotion($taillePromotion)
    {
        $this->taillePromotion = $taillePromotion;
    }

}