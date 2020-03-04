<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 17.05.2019
 * Time: 23:51
 */

class CommentModel extends Model
{
    public $table = 'comment';

    public function getOne($id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE law_id = " . $id);
    }

    public function create($id, $name, $msg)
    {
        $this->connection()->prepare("INSERT INTO {$this->table}(`law_id`, `user_name`, `message`) VALUES (?,?,?)")
            ->execute([$id, $name, $msg]);
    }

}