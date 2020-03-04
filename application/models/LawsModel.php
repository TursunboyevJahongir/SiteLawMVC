<?php

class LawsModel extends Model
{
    public $table = "laws";


    public function getAll()
    {
        return $this->query("SELECT laws.id, title, description, image, view_count, recom, important, cat_id, author_id, add_date, c.name, c.id as cid FROM laws LEFT JOIN category as c ON laws.cat_id = c.id");
    }

    public function getOne($id)
    {
        return $this->query("SELECT laws.id, title, description, image, view_count, recom, important, cat_id, author_id, add_date, c.name, c.id as cid FROM laws LEFT JOIN category as c ON laws.cat_id = c.id WHERE {$this->table}.id = " . $id);
    }


    public function getById($id)
    {
        return $this->query("SELECT laws.id, title, description, image, view_count, recom, important, cat_id, author_id, add_date, c.name, c.id as cid FROM laws LEFT JOIN category as c ON laws.cat_id = c.id WHERE {$this->table}.cat_id = " . $id);
    }

    public function create($title, $body, $image, $important, $recom, $category)
    {
        $this->connection()->prepare("INSERT INTO $this->table
        (`title`,description,`image`,`important`,`recom`,`cat_id`) VALUES (?,?,?,?,?,?)")
            ->execute([$title, $body, $image, $important, $recom, $category]);
    }

    public function update($id, $title, $body, $image, $important = 0, $recom = 0, $category)
    {
        if ($image != "")
            $this->connection()->prepare("UPDATE $this->table SET
        `title` = ?, `description`=?,`image`=?,`important`=?,`recom`=?,`cat_id`=? WHERE `id`=?")
                ->execute([$title, $body, $image, $important, $recom, $category, $id]);
        else
            $this->connection()->prepare("UPDATE $this->table SET
        `title` = ?, `description`=?, `important`=?,`recom`=?,`cat_id`=? WHERE `id`=?")
                ->execute([$title, $body, $important, $recom, $category, $id]);
    }

    public function order($column, $sort = "ASC")
    {
        return $this->query('SELECT laws.id, title, description, image, view_count, recom, important, cat_id, author_id, add_date, c.name, c.id as cid FROM laws LEFT JOIN category as c ON laws.cat_id = c.id ORDER BY `laws`.' . $column . ' ' . $sort);
    }

    public function like($key)
    {
        return $this->query('SELECT * FROM ' . $this->table
            . ' WHERE title LIKE "%' . $key . '%" OR description LIKE "%' . $key . '%"');
    }

    public function Important()
    {
        return $this->query("SELECT * FROM {$this->table} WHERE `important`=1");
    }

    public function Recom()
    {
        return $this->query("SELECT * FROM {$this->table} WHERE `recom`=1");
    }

    public function incViews($id)
    {
        return $this->query("UPDATE {$this->table} SET view_count = view_count+1 WHERE `id`= " . $id);
    }

    public function delete($id)
    {
        //var_dump($id);
        $this->query("DELETE FROM comment WHERE `law_id`=" . $id);
        return $this->query("DELETE FROM {$this->table} WHERE `id`=" . $id);
    }


}