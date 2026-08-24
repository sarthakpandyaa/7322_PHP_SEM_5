<?php

session_start(); //Compulsory for every page

?>

<html>

<body>

<?php

echo "Useris:".$_SESSION["username"];

?>

</body>

</html>