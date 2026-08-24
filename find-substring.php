<?php
$text = "Hello world, welcome to PHP programming.";
$search = "welcome";

$position = strpos($text, $search);

if ($position === false) {
    echo "Substring '" . $search . "' not found in the text.";
} else {
    echo "Substring '" . $search . "' found at position: " . $position;
}
