<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 14.05.2019
 * Time: 20:14
 */

class categoryModel extends Model
{
    public $table = 'category';

    public function getAll()
    {
        return $this->query("SELECT * FROM {$this->table}");
    }
    public function create($name){
        $this->connection()->prepare("INSERT INTO $this->table (`name`) VALUES (?)")->execute([$name]);
    }
    public function delete($id){
        $index=$this->query("SELECT id FROM laws WHERE `cat_id`=".$id);
//        var_dump($index);
        foreach ($index as $i):
            $this->query("DELETE FROM comment WHERE `law_id`=".$i['id']);
        endforeach;
        $this->query("DELETE FROM laws WHERE `cat_id`=".$id);
        return $this->query("DELETE FROM {$this->table} WHERE `id`=".$id);
    }
}