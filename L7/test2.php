<?php

include_once("classes/User.php");

session_start();

$user = unserialize($_SESSION["user"]);

echo("<h2>Dane użytkownika:</h2>");

$user->show();

echo("<h2> Id sesji</h2>");
echo(session_id());

echo("<h2>Wszystkie zmienne sesji</h2>");
foreach ($_SESSION as $key => $value) {
    echo("Key: \"".$key."\" Value: \"".$value."\"<br>");
}

echo("<h2>Wszystkie ciasteczka</h2>");
foreach ($_COOKIE as $key => $value) {
    echo("Key: \"".$key."\" Value: \"".$value."\"<br>");
}

//Prawidłowe zamknięcie sesji

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() -42000, '/');
}

session_destroy();

echo("<h2>Link do test2.php</h2>");
echo("<a href=test1.php>Przejdź do strony 1</a>");

?>