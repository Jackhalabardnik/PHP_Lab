<?php
class UserManager { 
  function loginForm() { 
   ?> 
   <h3>Formularz logowania</h3><p> 
   <form action="processLogin.php" method="post"> 
    Nazwa użytkownika: <br /><input name="login"><br />
    Hasło: <br /><input name="passwd"><br />
   <input type="submit" value="Zaloguj" name="zaloguj" /> 
   </form></p> <?php 
  } 
  function login($db) { 
   //funkcja sprawdza poprawność logowania  
   //wynik - id użytkownika zalogowanego lub -1 
   $args = [ 
            'login' => FILTER_SANITIZE_ADD_SLASHES, 
            'passwd' => FILTER_SANITIZE_ADD_SLASHES 
        ]; 
   //przefiltruj dane z GET (lub z POST) zgodnie z ustawionymi w $args filtrami: 
   $dane = filter_input_array(INPUT_POST, $args); 
   //sprawdź czy użytkownik o loginie istnieje w tabeli users  
   //i czy podane hasło jest poprawne 
   $login = $dane["login"]; 
   $passwd = $dane["passwd"]; 
   $userId = $db->selectUser($login, $passwd, "users"); 
   if ($userId >= 0) { //Poprawne dane  
     //rozpocznij sesję zalogowanego użytkownika 
     //usuń wszystkie wpisy historyczne dla użytkownika o $userId 
     //ustaw datę - format("Y-m-d H:i:s"); 
     //pobierz id sesji i dodaj wpis do tabeli logged_in_users 
   } 
   return $userId; 
  } 
  function logout($db) { 
        //pobierz id bieżącej sesji (pamiętaj o session_start() 
        //usuń sesję (łącznie z ciasteczkiem sesyjnym) 
        //usuń wpis z id bieżącej sesji z tabeli logged_in_users 
  } 
  function getLoggedInUser($db, $sessionId) { 
        //wynik $userId - znaleziono wpis z id sesji w tabeli logged_in_users  
        //wynik -1 - nie ma wpisu dla tego id sesji w tabeli logged_in_users  
    } 
}