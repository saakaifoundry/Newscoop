<?php

namespace Proxy\__CG__\Newscoop\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \Newscoop\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
        $this->__load();
        return parent::getId();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function checkPassword($password)
    {
        $this->__load();
        return parent::checkPassword($password);
    }

    public function setFirstName($first_name)
    {
        $this->__load();
        return parent::setFirstName($first_name);
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setLastName($last_name)
    {
        $this->__load();
        return parent::setLastName($last_name);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function getRealName()
    {
        $this->__load();
        return parent::getRealName();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }

    public function setActive()
    {
        $this->__load();
        return parent::setActive();
    }

    public function isActive()
    {
        $this->__load();
        return parent::isActive();
    }

    public function isPending()
    {
        $this->__load();
        return parent::isPending();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function setAdmin($admin)
    {
        $this->__load();
        return parent::setAdmin($admin);
    }

    public function isAdmin()
    {
        $this->__load();
        return parent::isAdmin();
    }

    public function setPublic($public = true)
    {
        $this->__load();
        return parent::setPublic($public);
    }

    public function isPublic()
    {
        $this->__load();
        return parent::isPublic();
    }

    public function getPoints()
    {
        $this->__load();
        return parent::getPoints();
    }

    public function setPoints($points)
    {
        $this->__load();
        return parent::setPoints($points);
    }

    public function getGroups()
    {
        $this->__load();
        return parent::getGroups();
    }

    public function addUserType(\Newscoop\Entity\User\Group $type)
    {
        $this->__load();
        return parent::addUserType($type);
    }

    public function getUserTypes()
    {
        $this->__load();
        return parent::getUserTypes();
    }

    public function setRole(\Newscoop\Entity\Acl\Role $role)
    {
        $this->__load();
        return parent::setRole($role);
    }

    public function getRoleId()
    {
        $this->__load();
        return parent::getRoleId();
    }

    public function addAttribute($name, $value)
    {
        $this->__load();
        return parent::addAttribute($name, $value);
    }

    public function getAttribute($name)
    {
        $this->__load();
        return parent::getAttribute($name);
    }

    public function setAttributes($attributes)
    {
        $this->__load();
        return parent::setAttributes($attributes);
    }

    public function getAttributes()
    {
        $this->__load();
        return parent::getAttributes();
    }

    public function setImage($image)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function hasPermission($permission)
    {
        $this->__load();
        return parent::hasPermission($permission);
    }

    public function getCommenters()
    {
        $this->__load();
        return parent::getCommenters();
    }

    public function getComments()
    {
        $this->__load();
        return parent::getComments();
    }

    public function getUserId()
    {
        $this->__load();
        return parent::getUserId();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function exists()
    {
        $this->__load();
        return parent::exists();
    }

    public function getProperty($p_key)
    {
        $this->__load();
        return parent::getProperty($p_key);
    }

    public function setSubscriber($subscriber)
    {
        $this->__load();
        return parent::setSubscriber($subscriber);
    }

    public function getSubscriber()
    {
        $this->__load();
        return parent::getSubscriber();
    }

    public function setAuthor(\Newscoop\Entity\Author $author = NULL)
    {
        $this->__load();
        return parent::setAuthor($author);
    }

    public function getAuthorId()
    {
        $this->__load();
        return parent::getAuthorId();
    }

    public function preUpdate()
    {
        $this->__load();
        return parent::preUpdate();
    }

    public function setIndexed(\DateTime $indexed = NULL)
    {
        $this->__load();
        return parent::setIndexed($indexed);
    }

    public function getIndexed()
    {
        $this->__load();
        return parent::getIndexed();
    }

    public function updateProfile($username, $password, $firstName, $lastName, $image, array $attributes)
    {
        $this->__load();
        return parent::updateProfile($username, $password, $firstName, $lastName, $image, $attributes);
    }

    public function getEditView(\Zend_View_Abstract $view)
    {
        $this->__load();
        return parent::getEditView($view);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'email', 'username', 'title', 'password', 'first_name', 'last_name', 'created', 'updated', 'status', 'is_admin', 'is_public', 'points', 'image', 'subscriber', 'role', 'groups', 'attributes', 'commenters', 'author');
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