<?php
function writeSecretSentence(string $PARAMETRE_1, string $PARAMETRE_2)
{
    return $PARAMETRE_1. 's\'incline face à' .$PARAMETRE_2;
    
}
$sentence = writeSecretSentence('la lune', 'le feu');
echo $sentence;
?>