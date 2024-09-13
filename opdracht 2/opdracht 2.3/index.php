<?php

$day = date('l');  

switch ($day) {
    case 'Monday':
        echo "Vandaag is het maandag. Begin van de werkweek!";
        break;
    case 'Tuesday':
        echo "Vandaag is het dinsdag. Een productieve dag gewenst!";
        break;
    case 'Wednesday':
        echo "Vandaag is het woensdag. Halverwege de week!";
        break;
    default:
        echo "Het is vandaag $day. Geniet van je dag!";
        break;
}
?>
