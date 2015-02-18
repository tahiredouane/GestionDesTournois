<?php

namespace GT\GestionTournoisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCarte
 */
class TypeCarte
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var string
     */
    private $tableName;

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
     * @var integer
     */
    private $int3;

    /**
     * @var \DateTime
     */
    private $dtCreation;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TypeCarte
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return TypeCarte
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
     * Set tableName
     *
     * @param string $tableName
     * @return TypeCarte
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    
        return $this;
    }

    /**
     * Get tableName
     *
     * @return string 
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set str1
     *
     * @param string $str1
     * @return TypeCarte
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
     * @return TypeCarte
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
     * @return TypeCarte
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
     * @return TypeCarte
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
     * @return TypeCarte
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
     * Set int3
     *
     * @param integer $int3
     * @return TypeCarte
     */
    public function setInt3($int3)
    {
        $this->int3 = $int3;
    
        return $this;
    }

    /**
     * Get int3
     *
     * @return integer 
     */
    public function getInt3()
    {
        return $this->int3;
    }

    /**
     * Set dtCreation
     *
     * @param \DateTime $dtCreation
     * @return TypeCarte
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
