<?php

include_once("classes/RegistrationForm.php");

$form = new RegistrationForm();

if(filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS))
{
    $user = $form->checkUser();
    if($user === NULL)
    {
        echo "<p> Niepoprawne dane rejestracji </p>";
    }
    else
    {
        echo "<p> Poprawne dane rejestracji: </p>";
        $user->show();
        $user->saveJSON("users.json");
        $user->saveXML("users.xml");
    }
}

echo "<h2>Wszystkie dane z JSON:</h2>";
User::getAllUsersJSON("users.json");

echo "<h2>Wszystkie dane z XML:</h2>";
User::getAllUsersXML("users.xml");
?>

