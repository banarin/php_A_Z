<?php 

    // declaration d'une variable
    $nom_variable = "je suis la variable <br>";
    // afficher la variable
    echo $nom_variable;

    //le transtypage de la variable
    $nombre = "5";
    $nombre += 1;
    echo $nombre . "<br>";// ça va afficher 6(integer)

    // les bouleans
    $bool  = true;
    echo $bool . "<br>";// quand c'est true ça affiche 1 et quand c'est false ça affiche rien

    // les tableaux
    $tableau = array("1","2","3"); // ancien façon de déclarer les tableaux
    $tableau2 = ["1","2","3"]; // façon moderne de declaration de tableau
    // afficher élément a index 1
    echo "\$tableau2[1] = " . $tableau2[1] . "<br>";

    // les tableaux associatif: elle se declarer avec les clés et valeurs
    $etudiant = [
        "classe" => "L2B",
        "nom" => "BANAKINAO",
        "prenom" => "irin",
        "age" => 18
    ];
    // afficher élement du tableau qui a la clé prenom
    echo "\$etudiant[ 'etudiant ' ] = ".$etudiant['prenom'] . "<br>";

    // pour parcourire tous les élements du tableau confere fichier boucles.php

    //declaration d'une constante
    define("pi",3.14);
    // afficher la constante
    echo "valeur de pi = " .pi ."<br>";

    // convertion de type d'une variable
    
    $taille = 1.9;
    // methode 1: convertire la variable en le mettant dans une nouvelle variable
    $taille2 = (integer) $taille;
    echo $taille2 . "<br>";
    // methode 2: convertire la variable en la mettant pas dans une nouvelle variable
    settype($taille,"integer");

    echo $taille . "<br>";
    

?>