<?php

namespace GT\GestionTournoisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournois
 */
class Tournois
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var \DateTime
     */
    private $dtDebut;

    /**
     * @var \DateTime
     */
    private $dtFin;

    /**
     * @var integer
     */
    private $categorie;

    /**
     * @var integer
     */
    private $systeme;

    /**
     * @var integer
     */
    private $nbrEquipe;

    /**
     * @var string
     */
    private $responsable;

    /**
     * @var boolean
     */
    private $etat;

    /**
     * @var integer
     */
    private $winner;

    /**
     * @var integer
     */
    private $meilleurJoueur;

    /**
     * @var integer
     */
    private $meilleurGardienne;

    /**
     * @var integer
     */
    private $buteur;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var string
     */
    private $str1;

    /**
     * @var string
     */
    private $str2;

    /**
     * @var integer
     */
    private $int1;

    /**
     * @var integer
     */
    private $int2;

    /**
     * @var \DateTime
     */
    private $dtCreation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Tournois
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dtDebut
     *
     * @param \DateTime $dtDebut
     * @return Tournois
     */
    public function setDtDebut($dtDebut)
    {
        $this->dtDebut = $dtDebut;
    
        return $this;
    }

    /**
     * Get dtDebut
     *
     * @return \DateTime 
     */
    public function getDtDebut()
    {
        return $this->dtDebut;
    }

    /**
     * Set dtFin
     *
     * @param \DateTime $dtFin
     * @return Tournois
     */
    public function setDtFin($dtFin)
    {
        $this->dtFin = $dtFin;
    
        return $this;
    }

    /**
     * Get dtFin
     *
     * @return \DateTime 
     */
    public function getDtFin()
    {
        return $this->dtFin;
    }

    /**
     * Set categorie
     *
     * @param integer $categorie
     * @return Tournois
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return integer 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set systeme
     *
     * @param integer $systeme
     * @return Tournois
     */
    public function setSysteme($systeme)
    {
        $this->systeme = $systeme;
    
        return $this;
    }

    /**
     * Get systeme
     *
     * @return integer 
     */
    public function getSysteme()
    {
        return $this->systeme;
    }

    /**
     * Set nbrEquipe
     *
     * @param integer $nbrEquipe
     * @return Tournois
     */
    public function setNbrEquipe($nbrEquipe)
    {
        $this->nbrEquipe = $nbrEquipe;
    
        return $this;
    }

    /**
     * Get nbrEquipe
     *
     * @return integer 
     */
    public function getNbrEquipe()
    {
        return $this->nbrEquipe;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Tournois
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Tournois
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set winner
     *
     * @param integer $winner
     * @return Tournois
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    
        return $this;
    }

    /**
     * Get winner
     *
     * @return integer 
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set meilleurJoueur
     *
     * @param integer $meilleurJoueur
     * @return Tournois
     */
    public function setMeilleurJoueur($meilleurJoueur)
    {
        $this->meilleurJoueur = $meilleurJoueur;
    
        return $this;
    }

    /**
     * Get meilleurJoueur
     *
     * @return integer 
     */
    public function getMeilleurJoueur()
    {
        return $this->meilleurJoueur;
    }

    /**
     * Set meilleurGardienne
     *
     * @param integer $meilleurGardienne
     * @return Tournois
     */
    public function setMeilleurGardienne($meilleurGardienne)
    {
        $this->meilleurGardienne = $meilleurGardienne;
    
        return $this;
    }

    /**
     * Get meilleurGardienne
     *
     * @return integer 
     */
    public function getMeilleurGardienne()
    {
        return $this->meilleurGardienne;
    }

    /**
     * Set buteur
     *
     * @param integer $buteur
     * @return Tournois
     */
    public function setButeur($buteur)
    {
        $this->buteur = $buteur;
    
        return $this;
    }

    /**
     * Get buteur
     *
     * @return integer 
     */
    public function getButeur()
    {
        return $this->buteur;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Tournois
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set str1
     *
     * @param string $str1
     * @return Tournois
     */
    public function setStr1($str1)
    {
        $this->str1 = $str1;
    
        return $this;
    }

    /**
     * Get str1
     *
     * @return string 
     */
    public function getStr1()
    {
        return $this->str1;
    }

    /**
     * Set str2
     *
     * @param string $str2
     * @return Tournois
     */
    public function setStr2($str2)
    {
        $this->str2 = $str2;
    
        return $this;
    }

    /**
     * Get str2
     *
     * @return string 
     */
    public function getStr2()
    {
        return $this->str2;
    }

    /**
     * Set int1
     *
     * @param integer $int1
     * @return Tournois
     */
    public function setInt1($int1)
    {
        $this->int1 = $int1;
    
        return $this;
    }

    /**
     * Get int1
     *
     * @return integer 
     */
    public function getInt1()
    {
        return $this->int1;
    }

    /**
     * Set int2
     *
     * @param integer $int2
     * @return Tournois
     */
    public function setInt2($int2)
    {
        $this->int2 = $int2;
    
        return $this;
    }

    /**
     * Get int2
     *
     * @return integer 
     */
    public function getInt2()
    {
        return $this->int2;
    }

    /**
     * Set dtCreation
     *
     * @param \DateTime $dtCreation
     * @return Tournois
     */
    public function setDtCreation($dtCreation)
    {
        $this->dtCreation = $dtCreation;
    
        return $this;
    }

    /**
     * Get dtCreation
     *
     * @return \DateTime 
     */
    public function getDtCreation()
    {
        return $this->dtCreation;
    }
}
