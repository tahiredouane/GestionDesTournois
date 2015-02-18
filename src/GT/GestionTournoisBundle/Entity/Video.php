<?php

namespace GT\GestionTournoisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 */
class Video
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
     * @var string
     */
    private $video;

    /**
     * @var string
     */
    private $lien;

    /**
     * @var integer
     */
    private $tournoi;

    /**
     * @var integer
     */
    private $matchs;

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
     * @return Video
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
     * Set video
     *
     * @param string $video
     * @return Video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    
        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Video
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    
        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set tournoi
     *
     * @param integer $tournoi
     * @return Video
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
     * @return Video
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
     * Set str1
     *
     * @param string $str1
     * @return Video
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
     * @return Video
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
     * @return Video
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
     * @return Video
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
     * @return Video
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