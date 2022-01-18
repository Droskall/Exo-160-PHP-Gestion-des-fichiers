<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */

// TODO Votre code ici.

file_put_contents("fichier.txt", "");

$text = "Angustias culpa ideoque voluntaria Catonem.";
$file = fopen("fichier.txt", "ab");
fwrite($file, $text);
fclose($file);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */

// TODO Votre code ici

$tab = ["ab", "bc", "cd", "de", "ef", "fg", "gh", "ij", "km", "no"];
$file = fopen("fichier.txt", "a+b");
foreach ($tab as $item){
    fwrite($file, $item);
}
fclose($file);

/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */

// TODO Votre code ici


$filePath = "fichier.txt";
echo pathinfo($filePath, PATHINFO_EXTENSION) . "<br>";


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */

// TODO Votre code ici.

if(file_exists("toto.txt")){
    echo "file exist";
}
else{
    echo "file dont exist";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */

// TODO Votre code ici si vous faites le bonus.

$text = fopen("fichier.txt","rb");
$modif = file_get_contents("fichier.txt");
$i = 0;
while($char = fgetc($text)){
    if ($char === "a"){
        $modif[$i] = "@";
    }
    $i++;
}
file_put_contents("fichier.txt",$modif);
fclose($text);