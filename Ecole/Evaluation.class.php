<?php

/**
 * Class Evaluation
 */
class Evaluation
{
    /**
     * @var Note $note la note associée à cette évaluation
     */
    private $note ;
    /**
     * @var
     */
    private  $dateEvaluation ;
    /**
     * @var Matiere $laMatiere la matière concernée par l'évaluation
     */
    private $laMatiere ;

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getDateEvaluation()
    {
        return $this->dateEvaluation;
    }

    /**
     * @param mixed $dateEvaluation
     */
    public function setDateEvaluation($dateEvaluation)
    {
        $this->dateEvaluation = $dateEvaluation;
    }

    /**
     * @return mixed
     */
    public function getLaMatiere()
    {
        return $this->laMatiere;
    }

    /**
     * @param mixed $laMatiere
     */
    public function setLaMatiere($laMatiere)
    {
        $this->laMatiere = $laMatiere;
    }


}