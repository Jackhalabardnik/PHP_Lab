<?php

include_once("classes/User.php");

session_start(); 

$user = new User("Tomek123", "Tomasz Nowak", "tomasz@email.pl", "NowakTomek123");

echo("<h2>Dane użytkownika:</h2>");

$user->show();

$_SESSION["user"] = serialize($user);

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

echo("<h2>Link do test2.php</h2>");
echo("<a href=test2.php>Przejdź do strony 2</a>");

?>