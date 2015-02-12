<?php

namespace GT\GestionTournoisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * But
 */
class But
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
    private $matchs;

    /**
     * @var integer
     */
    private $equipe;

    /**
     * @var integer
     */
    private $joueur;

    /**
     * @var integer
     */
    private $nbrBut;

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
     * @return But
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
     * Set matchs
     *
     * @param integer $matchs
     * @return But
     */
    public function setMatchs($matchs)
    {
        $this->matchs = $matchs;
    
        return $this;
    }

    /**
     * Get matchs
     *
     * @return integer 
     */
    public function getMatchs()
    {
        return $this->matchs;
    }

    /**
     * Set equipe
     *
     * @param integer $equipe
     * @return But
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
    
        return $this;
    }

    /**
     * Get equipe
     *
     * @return integer 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set joueur
     *
     * @param integer $joueur
     * @return But
     */
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;
    
        return $this;
    }

    /**
     * Get joueur
     *
     * @return integer 
     */
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set nbrBut
     *
     * @param integer $nbrBut
     * @return But
     */
    public function setNbrBut($nbrBut)
    {
        $this->nbrBut = $nbrBut;
    
        return $this;
    }

    /**
     * Get nbrBut
     *
     * @return integer 
     */
    public function getNbrBut()
    {
        return $this->nbrBut;
    }

    /**
     * Set str1
     *
     * @param string $str1
     * @return But
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
     * @return But
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
     * @return But
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
     * @return But
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
     * @return But
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
