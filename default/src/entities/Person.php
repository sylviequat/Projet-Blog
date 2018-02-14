<?php

namespace simplon\entities;

class Person {
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct(string $name,
                                string $email,
                                string $password,
                                int $id=null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     
    *public function setBirthdate(\Datetime $birthdate)
    *{
    *    $this->birthdate = $birthdate;
*
    *    return $this;
    *}
*
   * /**
     *  
     * Get the value of gender
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
