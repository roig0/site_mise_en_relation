<?php

class GestionBDD
{
    private static $instance = null;
    private $mysqli = null;

    public static function getMySqli()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new GestionBDD();
        }
        return self::$instance->mysqli;
    }

    public function __construct()
    {
        $this->mysqli =new mysqli('localhost', 'root', '', "Agri_DATA");
    }

    #region méthode à réutisiable

    public static function requeteSelect($table)
    {
        $mysqli = GestionBDD::getMySqli();

        $stmt = $mysqli->prepare("SELECT * FROM $table");
        $stmt->execute();
        $array=(array)$stmt->get_result()->fetch_all();

        return $array;
    }

    public static function requeteSelectById($table, $id)
    {
        $mysqli = GestionBDD::getMySqli();

        $stmt = $mysqli->prepare("SELECT * FROM $table WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $array=(array)$stmt->get_result()->fetch_all();

        return $array;
    }

#endregion

}