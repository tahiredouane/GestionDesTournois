<?php

namespace GT\GestionTournoisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 */
class Matchs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $tournoi;

    /**
     * @var integer
     */
    private $tour;

    /**
     * @var integer
     */
    private $numero;

    /**
     * @var integer
     */
    private $equipe1;

    /**
     * @var integer
     */
    private $equipe2;

    /**
     * @var \DateTime
     */
    private $dtMatch;

    /**
     * @var \DateTime
     */
    private $hMatch;

    /**
     * @var string
     */
    private $arbitre;

    /**
     * @var integer
     */
    private $but1;

    /**
     * @var integer
     */
    private $but2;

    /**
     * @var integer
     */
    private $pin1;

    /**
     * @var integer
     */
    private $pin2;

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
     * Set tournoi
     *
     * @param integer $tournoi
     * @return Matchs
     */
    public function setTournoi($tournoi)
    {
        $this->tournoi = $tournoi;
    
        return $this;
    }

    /**
     * Get tournoi
     *
     * @return integer 
     */
    public function getTournoi()
    {
        return $this->tournoi;
    }

    /**
     * Set tour
     *
     * @param integer $tour
     * @return Matchs
     */
    public function setTour($tour)
    {
        $this->tour = $tour;
    
        return $this;
    }

    /**
     * Get tour
     *
     * @return integer 
     */
    public function getTour()
    {
        return $this->tour;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Matchs
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set equipe1
     *
     * @param integer $equipe1
     * @return Matchs
     */
    public function setEquipe1($equipe1)
    {
        $this->equipe1 = $equipe1;
    
        return $this;
    }

    /**
     * Get equipe1
     *
     * @return integer 
     */
    public function getEquipe1()
    {
        return $this->equipe1;
    }

    /**
     * Set equipe2
     *
     * @param integer $equipe2
     * @return Matchs
     */
    public function setEquipe2($equipe2)
    {
        $this->equipe2 = $equipe2;
    
        return $this;
    }

    /**
     * Get equipe2
     *
     * @return integer 
     */
    public function getEquipe2()
    {
        return $this->equipe2;
    }

    /**
     * Set dtMatch
     *
     * @param \DateTime $dtMatch
     * @return Matchs
     */
    public function setDtMatch($dtMatch)
    {
        $this->dtMatch = $dtMatch;
    
        return $this;
    }

    /**
     * Get dtMatch
     *
     * @return \DateTime 
     */
    public function getDtMatch()
    {
        return $this->dtMatch;
    }

    /**
     * Set hMatch
     *
     * @param \DateTime $hMatch
     * @return Matchs
     */
    public function setHMatch($hMatch)
    {
        $this->hMatch = $hMatch;
    
        return $this;
    }

    /**
     * Get hMatch
     *
     * @return \DateTime 
     */
    public function getHMatch()
    {
        return $this->hMatch;
    }

    /**
     * Set arbitre
     *
     * @param string $arbitre
     * @return Matchs
     */
    public function setArbitre($arbitre)
    {
        $this->arbitre = $arbitre;
    
        return $this;
    }

    /**
     * Get arbitre
     *
     * @return string 
     */
    public function getArbitre()
    {
        return $this->arbitre;
    }

    /**
     * Set but1
     *
     * @param integer $but1
     * @return Matchs
     */
    public function setBut1($but1)
    {
        $this->but1 = $but1;
    
        return $this;
    }

    /**
     * Get but1
     *
     * @return integer 
     */
    public function getBut1()
    {
        return $this->but1;
    }

    /**
     * Set but2
     *
     * @param integer $but2
     * @return Matchs
     */
    public function setBut2($but2)
    {
        $this->but2 = $but2;
    
        return $this;
    }

    /**
     * Get but2
     *
     * @return integer 
     */
    public function getBut2()
    {
        return $this->but2;
    }

    /**
     * Set pin1
     *
     * @param integer $pin1
     * @return Matchs
     */
    public function setPin1($pin1)
    {
        $this->pin1 = $pin1;
    
        return $this;
    }

    /**
     * Get pin1
     *
     * @return integer 
     */
    public function getPin1()
    {
        return $this->pin1;
    }

    /**
     * Set pin2
     *
     * @param integer $pin2
     * @return Matchs
     */
    public function setPin2($pin2)
    {
        $this->pin2 = $pin2;
    
        return $this;
    }

    /**
     * Get pin2
     *
     * @return integer 
     */
    public function getPin2()
    {
        return $this->pin2;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Matchs
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
     * @return Matchs
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
     * @return Matchs
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
     * @return Matchs
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
     * @return Matchs
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
     * @return Matchs
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