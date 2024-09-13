<?php
$cities = ["Heerenveen", "Rotterdam", "Kampen", "Den Haag"];

echo "Eerste stad: " . $cities[0] . "<br>";
echo "Laatste stad: " . $cities[count($cities) - 1] . "<br>";

$cities[] = "Hellevoetlsuis";  

// Print de nieuwe stad
echo "Nieuwe toegevoegde stad: " . $cities[count($cities) - 1] . "<br>";
?>