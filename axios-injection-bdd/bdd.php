<?php

$pdo = new PDO("mysql:host=localhost;dbname=;charset=utf8","root",""); // Renseigner correctement les coordonnées de votre bdd
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");

if(isset($_POST['famille'])){
    $newTab = $_POST['famille'];
}

$explose = explode(",",$newTab);

function ajoutPlanteBd($tableau,$pdo){
    for($i=0;$i<count($tableau);$i++){
        $req = "
        INSERT INTO famillevegetaux (nomFamilleVegetal)
        values (:nomFamilleVegetal)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nomFamilleVegetal",$tableau[$i],PDO::PARAM_STR);
        $resultat = $stmt->execute();
    }
}

ajoutPlanteBd($explose,$pdo);


function selectFrom($pdo){
    $req = "SELECT * FROM vegetaux"; 
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $resultat;
}

$vegetauxList = selectFrom($pdo);

echo json_encode($vegetauxList);




