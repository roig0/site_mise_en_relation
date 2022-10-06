<?php

class GestionAgri
{

    public static function getAgriculteur()
    {
        $array = GestionBDD::requeteSelect('Agriculteur');

        return $array;
    }

    public static function getAgriculteurById($id)
    {
        $agri = GestionBDD::requeteSelectById('Agriculteur', $id);

        return $agri;
    }

    public static function getAgriculteurByRegion($id_region)
    {
        $mySqli = GestionBDD::getMySqli();

        $stmt = $mySqli->prepare("SELECT * FROM 'Agriculteur' WHERE id_region = ?");
        $stmt->bind_param('i', $id_region);
        $stmt->execute();
        $array = (array)$stmt->get_result()->fetch_all();

        return $array;

    }

    public static function getAgriculteurByCP($CP)
    {
        $mySqli = GestionBDD::getMySqli();

        $stmt = $mySqli->prepare("SELECT * FROM 'Agriculteur' WHERE CP = ?");
        $stmt->bind_param('i', $CP);
        $stmt->execute();
        $array = (array)$stmt->get_result()->fetch_all();

        return $array;
    }

    public static function insertAgriculteur($nom, $prenom, $email, $mdp, $CP, $id_region, $image_pro = null)
    {
        $exist = false;
        $mysqli = GestionBDD::getMySqli();

        //On récupère l'ensemble des utilisateurs
        $users = (array)GestionAgri::getAgriculteur();

        //On vérifie si l'utilisateur que l'ont souhaite créer n'existe pas déjà dans la BDD
        foreach ($users as $user) {
            if ($user[3] == $email) {
                $exist = true;
                break;
            }
        }

        //Si ce nouvelle utilisateur n'existe pas déjà alors on l'ajoute
        if ($exist == false) {
            if (is_null($image_pro)) {
                $password = password_hash($mdp, PASSWORD_DEFAULT);
                $stmt = $mysqli->prepare("INSERT INTO utilisateur (nom, prenom, email, mdp, CP, id_region) VALUES ('$nom', '$prenom', '$email', '$mdp', '$CP', '$id_region')");
                $stmt->execute();
            } else {

                $image_pro_name = $image_pro['name'];
                $image_pro_link = $image_pro['tmp_name'];
                move_uploaded_file($image_pro_link, 'D:/laragon/www/Forum_test/image/image_user/' . $image_pro_name);
                $password = password_hash($mdp, PASSWORD_DEFAULT);
                $stmt = $mysqli->prepare("INSERT INTO utilisateur (nom, prenom, mdp, CP, image_agri, email,) VALUES ('$nom', '$prenom', '$email', '$mdp', 'images/image_Agri/$image_pro_name')");
                $stmt->execute();
            }

        }
        return $exist;
    }

#region updateUser

    //La fonction permet de modifier un utilisateur dans la BDD
//    public static function updateProfils($email = null, $image_pro=null)
//    {
//        $mysqli = GestionBDD::getMySqli();
//        $id = GestionUser::getIdByPseudo($pseudo);
//
//
//        if(is_null($pseudo))
//        {
//            if(is_null($image_pro))
//            {
//                return false;
//
//            }else{
//
//                $image_pro_name = $image_pro['name'];
//                $image_pro_link = $image_pro['tmp_name'];
//                move_uploaded_file($image_pro_link, 'D:/laragon/www/Forum_test/image/image_user/'.$image_pro_name);
//                $stmt = $mysqli->prepare("UPDATE`utilisateur` SET image_user = 'image/image_user/$image_pro_name' WHERE id = $id");
//                $stmt->execute();
//            }
//        }else{
//
//            if(is_null($image_pro))
//            {
//                $stmt = $mysqli->prepare("UPDATE`utilisateur` SET pseudo = '$pseudo' ");
//                $stmt->execute();
//            }else{
//
//                $image_pro_name = $image_pro['name'];
//                $image_pro_link = $image_pro['tmp_name'];
//                move_uploaded_file($image_pro_link, 'D:/laragon/www/Forum_test/image/image_user/'.$image_pro_name);
//                $stmt = $mysqli->prepare("UPDATE`utilisateur` SET image_user = 'image/image_user/$image_pro_name', pseudo = '$pseudo' WHERE id = $id");
//                $stmt->execute();
//
//            }
//
//        }
//    }

#endregion

}