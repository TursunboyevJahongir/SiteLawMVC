<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 22.04.2019
 * Time: 15:49
 */

class Auth
{
    public static function onlyUsers() {
        if (!isset($_SESSION['user'])) {
            header("Location: /index.php?c=site&m=error");
            exit;
        }
    }
}