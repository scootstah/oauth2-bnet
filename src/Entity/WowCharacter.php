<?php

namespace Depotwarehouse\OAuth2\Client\Entity;

/**
 * Class WowCharacter
 */
class WowCharacter
{
    private $id;

    private $name;

    private $realmId;
    private $realmName;
    private $realmSlug;

    private $gender;

    private $faction;

    private $raceId;
    private $raceName;

    private $classId;
    private $className;

    private $level;

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists(self::class, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return WowCharacter
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return WowCharacter
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRealmId()
    {
        return $this->realmId;
    }

    /**
     * @param mixed $realmId
     * @return WowCharacter
     */
    public function setRealmId($realmId)
    {
        $this->realmId = $realmId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRealmName()
    {
        return $this->realmName;
    }

    /**
     * @param mixed $realmName
     * @return WowCharacter
     */
    public function setRealmName($realmName)
    {
        $this->realmName = $realmName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRealmSlug()
    {
        return $this->realmSlug;
    }

    /**
     * @param mixed $realmSlug
     * @return WowCharacter
     */
    public function setRealmSlug($realmSlug)
    {
        $this->realmSlug = $realmSlug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     * @return WowCharacter
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * @param mixed $faction
     * @return WowCharacter
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRaceId()
    {
        return $this->raceId;
    }

    /**
     * @param mixed $raceId
     * @return WowCharacter
     */
    public function setRaceId($raceId)
    {
        $this->raceId = $raceId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRaceName()
    {
        return $this->raceName;
    }

    /**
     * @param mixed $raceName
     * @return WowCharacter
     */
    public function setRaceName($raceName)
    {
        $this->raceName = $raceName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * @param mixed $classId
     * @return WowCharacter
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @param mixed $className
     * @return WowCharacter
     */
    public function setClassName($className)
    {
        $this->className = $className;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     * @return WowCharacter
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }
}
