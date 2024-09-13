<?php

$a = 10;              
$b = 3.14;            
$c = "PHP";           

$a = "Tien";        
$b = (int) 3;          
$c = false;          

echo "Nieuwe waarde van \$a: " . $a . "<br>";   
echo "Nieuwe waarde van \$b: " . $b . "<br>";
echo "Nieuwe waarde van \$c: " . ($c ? 'true' : 'false') . "<br>";

echo "<br>Waarden en types met var_dump():<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
?>