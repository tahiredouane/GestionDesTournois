<?php

namespace Proxies\__CG__\GT\GestionTournoisBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Systeme extends \GT\GestionTournoisBundle\Entity\Systeme implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCode($code)
    {
        $this->__load();
        return parent::setCode($code);
    }

    public function getCode()
    {
        $this->__load();
        return parent::getCode();
    }

    public function setIntitule($intitule)
    {
        $this->__load();
        return parent::setIntitule($intitule);
    }

    public function getIntitule()
    {
        $this->__load();
        return parent::getIntitule();
    }

    public function setTableName($tableName)
    {
        $this->__load();
        return parent::setTableName($tableName);
    }

    public function getTableName()
    {
        $this->__load();
        return parent::getTableName();
    }

    public function setStr1($str1)
    {
        $this->__load();
        return parent::setStr1($str1);
    }

    public function getStr1()
    {
        $this->__load();
        return parent::getStr1();
    }

    public function setStr2($str2)
    {
        $this->__load();
        return parent::setStr2($str2);
    }

    public function getStr2()
    {
        $this->__load();
        return parent::getStr2();
    }

    public function setStr3($str3)
    {
        $this->__load();
        return parent::setStr3($str3);
    }

    public function getStr3()
    {
        $this->__load();
        return parent::getStr3();
    }

    public function setInt1($int1)
    {
        $this->__load();
        return parent::setInt1($int1);
    }

    public function getInt1()
    {
        $this->__load();
        return parent::getInt1();
    }

    public function setInt2($int2)
    {
        $this->__load();
        return parent::setInt2($int2);
    }

    public function getInt2()
    {
        $this->__load();
        return parent::getInt2();
    }

    public function setInt3($int3)
    {
        $this->__load();
        return parent::setInt3($int3);
    }

    public function getInt3()
    {
        $this->__load();
        return parent::getInt3();
    }

    public function setDtCreation($dtCreation)
    {
        $this->__load();
        return parent::setDtCreation($dtCreation);
    }

    public function getDtCreation()
    {
        $this->__load();
        return parent::getDtCreation();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'code', 'intitule', 'tableName', 'str1', 'str2', 'str3', 'int1', 'int2', 'int3', 'dtCreation');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}