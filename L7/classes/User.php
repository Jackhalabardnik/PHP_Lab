<?php

class User {
    const STATUS_USER = 1;
    const STATUS_ADMIN = 2;
    protected $username;
    protected $passwd;
    protected $fullname;
    protected $email;
    protected $date;
    protected $status;

    function __construct($username, $fullname, $email, $passwd) {
        $this->status = User::STATUS_USER;
        $this->username = $username;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->passwd = password_hash($passwd,  PASSWORD_DEFAULT);
        $this->date = new DateTime();
    }

    function toArray()
    {
        $arr=[ 
            "username" => $this->username, 
            "fullname" => $this->fullname, 
            "email" => $this->email,
            "passwd" => $this->passwd,  
            "status" => $this->status, 
            "date" => $this->date->format("Y-m-d"), 
            ]; 
        return $arr;
    }

    static function getAllUsersJSON($plik)
    {
        $tab = json_decode(file_get_contents($plik)); 
        foreach ($tab as $val){ 
            echo "<p>".$val->username." ".$val->fullname." ".$val->date."</p>"; 
        }
    }
    
    function show() {
        echo implode(" ", $this->toArray());
    }

    function saveJSON($plik){ 
        $tab = json_decode(file_get_contents($plik),true); 
        array_push($tab,$this->toArray()); 
        file_put_contents($plik, json_encode($tab)); 
    }

    function saveXML($plik){
        $xml = simplexml_load_file('users.xml'); 
        $xmlCopy=$xml->addChild("user"); 
        
        foreach($this->toArray() as $key=>$value)
        {
            $xmlCopy->addChild($key, $value); 
        }

        $xml->asXML('users.xml');
    }

    static function getAllUsersXML($plik)
    {
        $allUsers = simplexml_load_file('users.xml'); 
        echo "<ul>"; 
        foreach ($allUsers as $user):
            $username=$user->username; 
            $fullname=$user->fullname;
            $date=$user->date;
            echo "<li> Username: $username Pełna nazwa: $fullname Data:  $date </li>"; 
        endforeach; 
        echo "</ul>";
    }

    static function getAllUsersFromDB($db)
    {
        $query = $db->select("select * from users", ["userName", "fullName", "email", "status", "date"]);
        if($query)
        {
            echo $query;
        }
        else
        {
            printf(
                "Błąd podczas pobieranie użytkowników: %s\n",
                $db->get_error()
            );
        }
    }

    public function saveDB($db) {
        $query = "insert into users values(default";

        foreach ($this->toArray() as $value) {
            $query .= ", '$value'";
        }

        $query .= ");";

        if(!$db->insert($query))
        {
            printf(
                "Błąd podczas dodawania użytkownika: %s\n",
                $db->get_error()
            ); 
        }
    }
}