<?php

namespace Touchwire\Entity\Proxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class TouchwireEntityUserProxy extends \Touchwire\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->_load();
        return parent::setId($id);
    }

    public function getUsername()
    {
        $this->_load();
        return parent::getUsername();
    }

    public function setUsername($username)
    {
        $this->_load();
        return parent::setUsername($username);
    }

    public function getPassword()
    {
        $this->_load();
        return parent::getPassword();
    }

    public function setPassword($password)
    {
        $this->_load();
        return parent::setPassword($password);
    }

    public function getRole()
    {
        $this->_load();
        return parent::getRole();
    }

    public function setRole($role)
    {
        $this->_load();
        return parent::setRole($role);
    }

    public function getActive()
    {
        $this->_load();
        return parent::getActive();
    }

    public function setActive($active)
    {
        $this->_load();
        return parent::setActive($active);
    }

    public function getLastLogin()
    {
        $this->_load();
        return parent::getLastLogin();
    }

    public function setLastLogin($lastLogin)
    {
        $this->_load();
        return parent::setLastLogin($lastLogin);
    }

    public function getCreatedAt()
    {
        $this->_load();
        return parent::getCreatedAt();
    }

    public function setCreatedAt($createdAt)
    {
        $this->_load();
        return parent::setCreatedAt($createdAt);
    }

    public function getUpdatedAt()
    {
        $this->_load();
        return parent::getUpdatedAt();
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->_load();
        return parent::setUpdatedAt($updatedAt);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'username', 'password', 'role', 'active', 'lastLogin', 'createdAt', 'updatedAt', 'userdata');
    }
}