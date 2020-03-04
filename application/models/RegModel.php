<?php


class RegModel extends Model
{
    public $table = 'user';

    public function getAll()
    {
        return $this->query("SELECT * FROM {$this->table}");
    }

    public function create($name, $login, $pass)
    {
        $this->query("INSERT INTO $this->table SET `full_name`='$name', `login`='$login',`password`='$pass'");
    }
}