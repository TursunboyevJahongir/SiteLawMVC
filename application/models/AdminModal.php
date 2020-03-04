<?php

class AdminModal
{
    private $password = "admin";

    public function checkpass($_password)
    {
        if ($_password == $this->password) {
            $_SESSION['user'] = true;
            return true;
        }
        return false;
    }

    private function password()
    {
        $_SESSION['user'] = true;
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }

    public function isLogged()
    {
        if (isset($_SESSION['user']))
            return true;
        return false;
    }
}