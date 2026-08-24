<?php

$array_one = array("one", "two", "three");

echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r(array_push($array_one, "four"));
echo "</pre>";

echo "<pre>";
print_r(array_keys($array_one));
echo "</pre>";

echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";

echo "<pre>";
print_r(array_values($array_one));
echo "</pre>";

//traverse the array
foreach ($array_one as $key => $one) {
    echo "$key => $one !";
    echo "<br>";
}

foreach ($array_one as $key => $one) {
    echo "$key => $one !";
    echo "<br>";
}


?>
