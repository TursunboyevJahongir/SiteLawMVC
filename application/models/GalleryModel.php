<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 30.04.2019
 * Time: 12:55
 */

class GalleryModel extends Model
{
    public $table = 'gallery';

    public function getAll()
    {
        return $this->query("SELECT * FROM {$this->table}");
    }

    public function delete($id)
    {
        /*        unlink('assets/images/<?=$item['image']?>');*/
        $this->deleteById($this->table, $id);
    }
}