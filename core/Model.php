<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 31.03.2019
 * Time: 23:24
 */

class Model {
    private static $params;

    public static function setParams($params) {
        self::$params = $params;
    }

    public function connection() {
        $connection = new PDO(self::$params['dsn'], self::$params['username'], self::$params['password']);
        return $connection;
    }

    public function query($sql) {
        return $this->connection()->query($sql)->fetchAll();
    }

    public function generalQuery($sql) {
        return $this->connection()->query($sql);
    }

    public function deleteById($table, $id) {
        $this->query('DELETE FROM '.$table.' WHERE id = '.$id);
    }

}