<?php
$score = 82;  

switch (true) {
    case ($score > 90):
        echo "Geweldig";
        break;
    case ($score >= 75 && $score <= 90):
        echo "Goed";
        break;
    case ($score >= 55 && $score < 75):
        echo "Voldoende";
        break;
    case ($score < 55):
        echo "Onvoldoende";
        break;
}
echo "<br>";

$result = ($score > 55) ? "Geslaagd" : "Gezakt";

echo $result;
?>