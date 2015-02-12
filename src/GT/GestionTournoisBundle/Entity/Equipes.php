<?php

namespace GT\GestionTournoisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipes
 */
class Equipes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $association;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $coach;

    /**
     * @var string
     */
    private $cin;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $photoEquipe;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $lienPhoto;

    /**
     * @var string
     */
    private $lienPhotoEquipe;

    /**
     * @var string
     */
    private $lienLogo;

    /**
     * @var integer
     */
    private $orders;

    /**
     * @var string
     */
    private $str1;

    /**
     * @var string
     */
    private $str2;

    /**
     * @var string
     */
    private $str3;

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
     * @var \GT\GestionTournoisBundle\Entity\Tournois
     */
    private $tournoi;

    /**
     * @var \GT\GestionTournoisBundle\Entity\TableReference
     */
    private $groupe;


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
     * Set nom
     *
     * @param string $nom
     * @return Equipes
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set association
     *
     * @param string $association
     * @return Equipes
     */
    public function setAssociation($association)
    {
        $this->association = $association;
    
        return $this;
    }

    /**
     * Get association
     *
     * @return string 
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Equipes
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set coach/entraineur
     *
     * @param string $coach/entraineur
     * @return Equipes
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;
    
        return $this;
    }

    /**
     * Get coach/entraineur
     *
     * @return string 
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Equipes
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Equipes
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set photoEquipe
     *
     * @param string $photoEquipe
     * @return Equipes
     */
    public function setPhotoEquipe($photoEquipe)
    {
        $this->photoEquipe = $photoEquipe;
    
        return $this;
    }

    /**
     * Get photoEquipe
     *
     * @return string 
     */
    public function getPhotoEquipe()
    {
        return $this->photoEquipe;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Equipes
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set lienPhoto
     *
     * @param string $lienPhoto
     * @return Equipes
     */
    public function setLienPhoto($lienPhoto)
    {
        $this->lienPhoto = $lienPhoto;
    
        return $this;
    }

    /**
     * Get lienPhoto
     *
     * @return string 
     */
    public function getLienPhoto()
    {
        return $this->lienPhoto;
    }

    /**
     * Set lienPhotoEquipe
     *
     * @param string $lienPhotoEquipe
     * @return Equipes
     */
    public function setLienPhotoEquipe($lienPhotoEquipe)
    {
        $this->lienPhotoEquipe = $lienPhotoEquipe;
    
        return $this;
    }

    /**
     * Get lienPhotoEquipe
     *
     * @return string 
     */
    public function getLienPhotoEquipe()
    {
        return $this->lienPhotoEquipe;
    }

    /**
     * Set lienLogo
     *
     * @param string $lienLogo
     * @return Equipes
     */
    public function setLienLogo($lienLogo)
    {
        $this->lienLogo = $lienLogo;
    
        return $this;
    }

    /**
     * Get lienLogo
     *
     * @return string 
     */
    public function getLienLogo()
    {
        return $this->lienLogo;
    }

    /**
     * Set orders
     *
     * @param integer $orders
     * @return Equipes
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    
        return $this;
    }

    /**
     * Get orders
     *
     * @return integer 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set str1
     *
     * @param string $str1
     * @return Equipes
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
     * @return Equipes
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
     * Set str3
     *
     * @param string $str3
     * @return Equipes
     */
    public function setStr3($str3)
    {
        $this->str3 = $str3;
    
        return $this;
    }

    /**
     * Get str3
     *
     * @return string 
     */
    public function getStr3()
    {
        return $this->str3;
    }

    /**
     * Set int1
     *
     * @param integer $int1
     * @return Equipes
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
     * @return Equipes
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
     * @return Equipes
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

    /**
     * Set tournoi
     *
     * @param \GT\GestionTournoisBundle\Entity\Tournois $tournoi
     * @return Equipes
     */
    public function setTournoi(\GT\GestionTournoisBundle\Entity\Tournois $tournoi = null)
    {
        $this->tournoi = $tournoi;
    
        return $this;
    }

    /**
     * Get tournoi
     *
     * @return \GT\GestionTournoisBundle\Entity\Tournois 
     */
    public function getTournoi()
    {
        return $this->tournoi;
    }

    /**
     * Set groupe
     *
     * @param \GT\GestionTournoisBundle\Entity\TableReference $groupe
     * @return Equipes
     */
    public function setGroupe(\GT\GestionTournoisBundle\Entity\TableReference $groupe = null)
    {
        $this->groupe = $groupe;
    
        return $this;
    }

    /**
     * Get groupe
     *
     * @return \GT\GestionTournoisBundle\Entity\TableReference 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }
}
