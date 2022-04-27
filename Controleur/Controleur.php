<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../Modele/ModeleVille.php';

$uneVille = new ModeleVille();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'GET') {
    $action = filter_input(INPUT_GET, "action");
    switch ($action) {
        case 'remplirVilles':       
            $codePostal = filter_input(INPUT_GET, 'codePostal');
            if (isset($codePostal)) {
               // echo 'une ville';
                 echo $uneVille->Villes($codePostal);
            }
            break;
    }
}