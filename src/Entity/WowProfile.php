<?php

namespace Depotwarehouse\OAuth2\Client\Entity;

/**
 * Class WowProfile
 */
class WowProfile
{
    private $id;

    private $accounts = [];

    public function __construct($id, $accounts = [])
    {
        $this->id = $id;
        $this->accounts = $accounts;
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
     * @return WowProfile
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param array $accounts
     * @return WowProfile
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
        return $this;
    }
}
