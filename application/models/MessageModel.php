<?php


class MessageModel extends Model
{
    public $table = 'TechnicalSupport';

    public function getAll()
    {
        return $this->query("SELECT * FROM {$this->table}");
    }

    public function limit()
    {
        return $this->query("SELECT * FROM {$this->table} LIMIT 4");
    }

    public function count()
    {
        return $this->query("SELECT COUNT(id) FROM {$this->table}");
    }

    public function send($email, $phone, $problem)
    {
        $this->connection()->prepare("INSERT INTO $this->table
                (`email`,phone,problem) VALUES (?,?,?)")
            ->execute([$email, $phone, $problem]);
    }

}