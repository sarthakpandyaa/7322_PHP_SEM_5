<?php

// function encryptCookie($Arav)
//  {
//     $Arav =$Arav."654654";
//     setcookie("c1", $Arav, time() + 300);
//     $data = $_COOKIE['c1'];
//     return $data;
//  }

//Cookie is a persistent storGE BUT WITH A LIMITED SIZE OF 4KB.
// IT IS STORED IN THE CLIENT SIDE. 
//IT IS USED TO STORE THE USER INFORMATION.  

//DELITING Cookies
setcookie("c1", "", time() - 600);



//Creating Cookies
//setcookie("c1", "Arav", time() + 300);

//Editing Cookies
//setcookie("c1", "Devloper", time() + 600);


//Reading Cookies
echo $_COOKIE["c1"];



?>
