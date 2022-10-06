<?php

class GestionRegion
{

    public static function getRegion()
    {
        $array = GestionBDD::getMySqli('region');

        return $array;
    }

    public static function getRegionById($id)
    {
        $region = GestionBDD::requeteSelectById('region', $id);

        return $region;
    }

}