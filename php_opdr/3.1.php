<?php

$cities = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];

echo "First city: " . $cities[0] . "\n";
echo "Last city: " . $cities[count($cities) - 1] . "\n";

$cities[] = "Eindhoven";
echo "New city: " . $cities[count($cities) - 1] . "\n";

?>