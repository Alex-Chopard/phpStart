<?php

class User {
    /* PROPERTIES */
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $address;

    /* CONSTRUCTOR */
    public function __construct (int $id, string $firstName, string $lastName, string $email, string $address) {
        $this->setId($id);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setAddress($address);
    }

    /* GETTERS */
    public function getId () : int {
        return $this->id;
    }
    public function getFirstName () : string {
        return $this->firstName;
    }
    public function getLastName () : string {
        return $this->lastName;
    }
    public function getEmail () : string {
        return $this->email;
    }
    public function getAddress () : string {
        return $this->address;
    }

    /* SETTERS */
    public function setId (int $value) {
        $this->id = $value;
    }
    public function setFirstName (string $value) {
        $this->firstName = $value;
    }
    public function setLastName (string $value) {
        $this->lastName = $value;
    }
    public function setEmail (string $value) {
        $this->email = $value;
    }
    public function setAddress (string $value) {
        $this->address = $value;
    }
}

