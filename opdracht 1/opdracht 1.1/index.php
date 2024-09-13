<?php

$firstName = "Jan";      
$age = 25;                
$height = 1.75;           
$isStudent = true;

echo "Naam: " . $firstName . "<br>";    
echo "Leeftijd: " . $age . "<br>";
echo "Lengte: " . $height . " meter<br>";
echo "Is student: " . ($isStudent ? 'Ja' : 'Nee') . "<br>";
?>

<!-- 
///correcte variablenamen:    

    $firstName
    $age
    $user_height
    $_isActive
    $totalAmount

Vijf ongeldige variabelenamen:
1name
Variabelenamen mogen niet met een cijfer beginnen.


@age
Ongeldig: Variabelenamen mogen geen speciale tekens bevatten, behalve een underscore (_).
Correctie: $age

user-name
Ongeldig: Het gebruik van het minteken (-) is niet toegestaan.


total amount
Ongeldig: Variabelenamen mogen geen spaties bevatten.


class
Ongeldig: class is een gereserveerd woord in PHP en kan niet als variabelenaam worden gebruikt.
