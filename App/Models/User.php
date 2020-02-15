<?php

namespace App\Models;
class User
{
    protected $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function existsUser($login)
    {
        foreach ($this->users as $user) {
            if ($user['login'] === $login) {
                return true;
            }
        }
        return false;
    }

    public function checkPassword(string $login, string $password)
    {
        foreach ($this->users as $user) {
            if ($user['login'] === $login && password_verify($password, $user['password'])) {
                return true;
            }
        }
        return false;
    }


}

