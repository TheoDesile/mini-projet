<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './ModeleVille.php';

$ville = new ModeleVille();
$codePostal = filter_input(INPUT_GET, "codePostal");
echo $ville->Villes($codePostal);