<?php

$score = 70;

switch ($score) {
    case ($score > 90):
        echo "Geweldig ";
        break;
    case ($score >= 75 && $score <= 90):
        echo "Goed ";
        break;
    case ($score >= 55 && $score < 75):
        echo "Voldoende ";
        break;
    default:
        echo "Onvoldoende ";
        break;
}

echo $score > 55 ? "Geslaagd" : "Gezakt";

?>