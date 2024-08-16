<!-- 
Passage  par reference et par copier(valeur)

Par défaut, les variables sont toujours affectées par valeur
Affecter par référence Créer un alias de variable ou pointer vers une autre
-->
<?php

$name = "Mourad";
$$name = &$name;
$$name = "BARKOUCH";

echo $name;
echo "<br>";
echo $Mourad;


$name2 = "Mourad2";

$$name2 = $name2;
$$name2 = "BARKOUCH";


echo "<br>";
echo "<br>";
echo $name2;
echo "<br>";
echo $Mourad2;