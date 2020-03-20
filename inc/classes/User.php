<?php

class User
{
    private $pseudo;
    private $email;
    private $role;
    private $password;

    public function __construct($pseudo, $email, $role, $password)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->role = $role;
        $this->password = $password;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
}