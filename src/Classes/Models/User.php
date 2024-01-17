<?php

namespace App\Models;



class User
{

    private $name;
    private $email;
    private $pass;
    private $age;

    /**
     * @param $name
     * @param $email
     * @param $pass
     * @param $age
     */
    public function __construct($name=null, $email=null, $pass=null, $age=null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->age = $age;
    }
    /**
     *
     * @return mixed
     */
    public function getEmail()
    {
        if (empty($this->email)) {
            throw new \InvalidArgumentException( 10);
        }
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {

        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
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
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}