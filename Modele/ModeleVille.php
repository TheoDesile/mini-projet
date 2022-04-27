<?php


require_once '../Modele/Modele.php';

class ModeleVille extends Modele {

    public function Villes($codePostal) {
        try {
            $requete = $this->_bdd->prepare("select nom from Villes "
                    . "where code_postal LIKE :codePostal ;");
          
            $condition = '%'.$codePostal.'%';
            $requete->bindParam(":codePostal", $condition);            
            $requete->execute();

            $villes = array();
            while ($ligne = $requete->fetch()) {
                array_push($villes, $ligne["nom"]);        
            }
            header('Content-Type: application/json');
            return json_encode($villes);
            
        } catch (PDOException $exc) {
            die("<br/> Pb Obtenirvilles :" . $exc->getMessage());
        }
    }

}