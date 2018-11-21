<?php

$user1 = "bren";
$pass1 = "12345";

$user2 = "prof1";
$pass2 = "12345";

if(isset($_POST["submit"])) {
    if($_POST["username"] == $user1 && $_POST["password"] == $pass1) {
        echo "Login successful. Welcome $_POST[username]!";
        header('Location:SeleccionIdioma.html');
    } elseif ($_POST["username"] == $user2 && $_POST["password"] == $pass2) {
        echo "Incorrect Login";
        header('Location:Administracion.html');
    }
}


?>