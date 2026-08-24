<?php
$input = "Hello, World!";
$reversed = strrev($input);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>strrev() Demo</title>
</head>
<body>
    <h1>strrev() in PHP</h1>
    <p>Original string: <?php echo htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Reversed string: <?php echo htmlspecialchars($reversed, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
