<?php

class GestionEnt
{

    public static function getEntreprise()
    {
        $array = (array) GestionBDD::requeteSelect('Entreprise');

        return $array;
    }

    public static function getEntrepriseById($id)
    {
        $ent = GestionBDD::requeteSelectById('Entreprise',$id);

        return $ent;
    }

    public static function getEntrepriseByCP($CP)
    {
        $mysqli = GestionBDD::getMySqli();

        $stmt = $mysqli->prepare("SELECT * FROM 'Entreprise' WHERE CP = ? ");
        $stmt->bind_param('i', $CP);
        $stmt->execute();

        $entr = $stmt->get_result()->fetch_row();

        return $entr;
    }

    public static function getEntrepriseByRegion($id_region)
    {
        $mysqli = GestionBDD::getMySqli();

        $stmt = $mysqli->prepare("SELECT * FROM 'Entreprise' WHERE id_region = ?");
        $stmt->bind_param('i', $id_region);
        $stmt->execute();

        $array = $stmt->get_result()->fetch_all();

        return $array;
    }

}