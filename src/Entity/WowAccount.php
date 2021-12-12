<?php

namespace Depotwarehouse\OAuth2\Client\Entity;

/**
 * Class WowAccount
 */
class WowAccount
{
    private $id;

    private $characters = [];

    public function __construct($id, $characters = [])
    {
        $this->id = $id;
        $this->characters = $characters;
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
     * @return WowAccount
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param array $characters
     * @return WowAccount
     */
    public function setCharacters($characters)
    {
        $this->characters = $characters;
        return $this;
    }
}
