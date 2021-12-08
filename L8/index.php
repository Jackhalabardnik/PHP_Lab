<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}

</style>
<?php

include_once("classes/RegistrationForm.php");
include_once "classes/Baza.php";

//tworzymy uchwyt do bazy danych: 
$bd = new Baza("localhost", "root", "", "klienci");

$form = new RegistrationForm();

if (filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
    $user = $form->checkUser();
    if ($user === NULL) {
        echo "<p> Niepoprawne dane rejestracji </p>";
    } else {
        echo "<p> Poprawne dane rejestracji: </p>";
        $user->show();
        $user->saveDB($bd);
    }
}


echo "<h2>Wszystkie dane z bazy:</h2>";
User::getAllUsersFromDB($bd);
