<?php
// 
use DiDom\Document;
require "./vendor/autoload.php";

$html = " "; // Renseigner l'URL ici
$document = new Document($html,true);

function getFamillesVegetaux($document){

    $data = "[";

    $elements = $document->xpath("//tr/td[1]"); // Renseigner le xpath approprié à la place. Ici c'est un exemple pour récupérer les premières cellule des lignes d'un tableau contenant les nom de famille de végétaux

    foreach ($elements as $element){
        echo "Famille : ".$element->text();
        echo '<br>';
        $data = $data.'{"famille":"'.$element->text().'"},';
    }

    $data = $data.']';
    saveData($data);
}

getFamillesVegetaux($document);

function saveData($data){

    if(!is_dir("FamillesVegetaux")){
        // mkdir — Crée un dossier
        mkdir("FamillesVegetaux");
    }
    // fopen — Ouvre un fichier ou une URL
    $file = fopen("FamillesVegetaux/familles.json","w");
    // fwrite — Écrit un fichier
    fwrite($file,$data);
    // fclose - Ferme un fichier
    fclose($file);
}


