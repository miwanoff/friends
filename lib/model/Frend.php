<?php
class Frend
{
    private $key;
    private $name;
    private $yearOfBirth;
    private $email;
    public function __construct($name, $yearOfBirth, $email)
    {
        $this->key = /*md5(*/$name . $yearOfBirth . $email/*)*/;
        $this->name = $name;
        $this->yearOfBirth = $yearOfBirth;
        $this->email = $email;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }
    public function getEmail()
    {
        return $this->email;
    }
}