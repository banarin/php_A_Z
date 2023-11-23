<?php
    // declaration du tableau
    $tableau = ["1","2","3"];
    // parcourire le tableau en affichant
    for ($i=0; $i < 3; $i++) { 
        echo "\$tableau[$i] = " . $tableau[$i] . "<br>";
    }
    echo "Parcourire un tableau associatif". "<br>";
    // les tableaux associatif sont parcouru par la boucle foreach
    $etudiant = [
        "classe" => "L2B",
        "nom" => "BANAKINAO",
        "prenom" => "irin",
        "age" => 18
    ];
    // parcourire etudiant en recuperant la clé et la valeur
    foreach ($etudiant as $key => $value) {
        echo "\$etudiant[$key] = " . $value . "<br>";
    }

?>