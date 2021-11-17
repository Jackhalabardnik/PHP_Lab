<?php
include_once("User.php");

class RegistrationForm {
    protected User $user;
     
    function __construct() {

        echo "
        <h3>Formularz rejestracji</h3><p>
        <form action=\"index.php\" method=\"post\">
        Nazwa użytkownika: <br/><input name=\"username\" /><br/>
        Imię i Nazwisko: <br/><input name=\"fullname\" /><br/>
        Hasło: <br/><input name=\"password\" /><br/>
        Email: <br/><input name=\"email\" /><br/>
        <input name=\"email\" /><br/>
        </form></p>
        ";
        
    }


}