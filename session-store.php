<?php
//session are always unique for each user and it is stored in the server side.
//Session Are always cookies

session_start();//compulsory to start the session




?>


<html lang="en">
<body>
    <?php

$_SESSION["username"] = "Arav";

echo "Session information is stored successfully.<br/>";

?>
</body>
</html>