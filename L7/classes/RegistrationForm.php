<?php
include_once("User.php");

class RegistrationForm
{
    protected User $user;

    function __construct()
    {
?>
        <h3>Formularz rejestracji</h3>
        <p>
        <form action="index.php" method="post">
            Nazwa użytkownika: <br /><input name="username"><br />
            Imię i Nazwisko: <br /><input name="fullname"><br />
            Hasło: <br /><input name="password"><br />
            Email: <br /><input name="email"><br />
            <input class="button" name="submit" type="submit" id="submit" value="Register">
        </form>
        </p>
<?php
    }

    public function checkUser()
    {
        $args =
            [
                'username' => [
                    'filter' => FILTER_VALIDATE_REGEXP,
                    'options' => ['regexp' => '/^[A-z]{1,25}$/']
                ],
                'fullname' => [
                    'filter' => FILTER_VALIDATE_REGEXP,
                    'options' => ['regexp' => '/^[A-ZÓŻŹĆŚŃŁĘĄ]{1}[a-ząęłńśćźżó]{1,25}[ ][A-ZÓŻŹĆŚŃŁĘĄ]{1}[a-ząęłńśćźżó]{1,25}$/']
                ],
                'password' => [
                    'filter' => FILTER_VALIDATE_REGEXP,
                    'options' => ['regexp' => '/^.{8,32}$/']
                ],
                'email' => FILTER_VALIDATE_EMAIL
            ];
        $dane = filter_input_array(INPUT_POST, $args);
        $errors = "";
        foreach ($dane as $key => $val) {
            if ($val === false or $val === NULL) {
                $errors .= $key . " ";
            }
        }
        if ($errors === "") {
            $user = new User($dane["username"], $dane["fullname"], $dane["email"], $dane["password"]);
        } else {
            $user = NULL;
        }
        return $user;
    }
}
