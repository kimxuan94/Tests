<?php
// Instruction 1
$fp = fopen ("donnees.txt", "r");
// Instruction 2
$contenu_du_fichier = fgets ($fp, 1000);
// Instruction 3
fclose ($fp);
// Instruction 4
echo 'Notre fichier contient : '.$contenu_du_fichier;
?>
