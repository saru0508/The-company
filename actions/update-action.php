<?php

 include "../classes/User.php";

 $user= new User;

 $user->update($_POST, $_FILES);
 #The $_POST ->holds the data like the firstname lastname username,etc.
 #The $Files ->holds the image /photo uploaded by the user